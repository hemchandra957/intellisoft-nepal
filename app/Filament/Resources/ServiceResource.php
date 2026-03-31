<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Service Details')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),

                        Forms\Components\TextInput::make('slug')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->readOnly(),

                        Forms\Components\TextInput::make('icon')
                            ->placeholder('fas fa-laptop')
                            ->helperText('FontAwesome class: e.g., fas fa-mobile-alt'),

                        Forms\Components\TextInput::make('sort_order')
                            ->numeric()
                            ->default(0)
                            ->label('Display Order'),

                        Forms\Components\Textarea::make('short_description')
                            ->required()
                            ->label('Summary (Short)')
                            ->placeholder('This shows on the service cards...')
                            ->columnSpanFull(),

                        // यो फिल्ड नभएर नै अघि Error आएको हो
                        Forms\Components\RichEditor::make('description')
                            ->required()
                            ->label('Full Detailed Description')
                            ->columnSpanFull(),

                        Forms\Components\FileUpload::make('image')
                            ->image()
                            ->directory('services'),

                        Forms\Components\Toggle::make('is_active')
                            ->label('Active on Website')
                            ->default(true),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('sort_order')->label('#')->sortable(),
                Tables\Columns\TextColumn::make('title')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('icon'),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->label('Status'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('sort_order')
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
