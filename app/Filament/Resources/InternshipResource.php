<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InternshipResource\Pages;
use App\Filament\Resources\InternshipResource\RelationManagers;
use App\Models\Internship;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Section;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InternshipResource extends Resource
{
    protected static ?string $model = Internship::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
               Section::make('Personal & Academic Details')
                    ->description('Applicant basic information and education.')
                    ->schema([
                        Forms\Components\TextInput::make('full_name')->required()->maxLength(255),
                        Forms\Components\TextInput::make('email')->email()->required()->maxLength(255),
                        Forms\Components\TextInput::make('phone')->tel()->required(),
                        Forms\Components\Select::make('gender')
                            ->options(['Male' => 'Male', 'Female' => 'Female', 'Other' => 'Other']),

                        Forms\Components\TextInput::make('college')->required(),
                        Forms\Components\TextInput::make('faculty')->required(),
                        Forms\Components\TextInput::make('semester')->required(),
                        Forms\Components\Select::make('apply_for')
                            ->options([
                                'Laravel' => 'Laravel',
                                'React' => 'React JS',
                                'Flutter' => 'Flutter',
                            ])->required(),
                    ])->columns(2),

                Section::make('Address & Dates')
                    ->schema([
                        Forms\Components\TextInput::make('province')->required(),
                        Forms\Components\TextInput::make('district')->required(),
                        Forms\Components\TextInput::make('palika')->required(),
                        Forms\Components\DatePicker::make('start_date')->required(),
                    ])->columns(2),

                Section::make('Documents & Status')
                    ->schema([
                        Forms\Components\FileUpload::make('cv')
                            ->directory('interns/cvs')
                            ->required()
                            ->openable()
                            ->preserveFilenames(),
                        Forms\Components\Select::make('status')
                          ->options([
                                'Pending' => 'Pending',
                                'Accepted' => 'Accepted',
                                'Rejected' => 'Rejected',
                            ])->default('Pending')->required(),
                    ])->columns(2),
                 ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('full_name')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('email')->searchable(),
                Tables\Columns\TextColumn::make('apply_for')->badge()->color('info'),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Pending'  => 'warning',
                        'Accepted' => 'success',
                        'Rejected' => 'danger',
                        default    => 'gray',
                    }),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable()->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'Pending'  => 'Pending',
                        'Accepted' => 'Accepted',
                        'Rejected' => 'Rejected',
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),

            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListInternships::route('/'),
            'create' => Pages\CreateInternship::route('/create'),
            'edit' => Pages\EditInternship::route('/{record}/edit'),
        ];
    }
}
