<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeamResource\Pages;
use App\Models\Team;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class TeamResource extends Resource
{
    protected static ?string $model = Team::class;

    protected static ?string $navigationIcon = 'heroicon-o-users'; // Changed to users icon

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Member Information')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('designation')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('e.g. Senior Software Engineer'),

                        Forms\Components\FileUpload::make('photo')
                            ->image()
                            ->imageEditor() // Allows cropping
                            ->circle()
                            ->directory('team-photos')
                            ->columnSpanFull(),
                    ])->columns(2),

                Forms\Components\Section::make('Social Media & Settings')
                    ->schema([
                        Forms\Components\TextInput::make('linkedin_url')
                            ->url()
                            ->label('LinkedIn URL')
                            ->placeholder('https://linkedin.com/in/username'),

                        Forms\Components\TextInput::make('twitter_url')
                            ->url()
                            ->label('Twitter/X URL'),

                        Forms\Components\TextInput::make('facebook_url')
                            ->url()
                            ->label('Facebook URL'),

                        Forms\Components\TextInput::make('sort_order')
                            ->numeric()
                            ->default(0)
                            ->helperText('Lower numbers appear first on the website.'),

                        Forms\Components\Toggle::make('is_active')
                            ->label('Show on website')
                            ->default(true),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('photo')
                    ->circular(),

                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('designation')
                    ->searchable(),

                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->label('Status'),

                Tables\Columns\TextColumn::make('sort_order')
                    ->numeric()
                    ->sortable(),
            ])
            ->defaultSort('sort_order') // Sort by order by default
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTeams::route('/'),
            'create' => Pages\CreateTeam::route('/create'),
            'edit' => Pages\EditTeam::route('/{record}/edit'),
        ];
    }
}
