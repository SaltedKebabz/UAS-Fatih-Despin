<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Profile;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ProfileResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProfileResource\RelationManagers;

class ProfileResource extends Resource
{
    protected static ?string $model = Profile::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                ->label('Nama Mahasiswa')
                ->maxLength(100)
                ->required(),

                TextInput::make('nim')
                ->label('NIM')
                ->maxLength(10)
                ->required(),

                TextInput::make('kelas')
                ->label('Kelas')
                ->maxLength(100)
                ->required(),

                FileUpload::make('ProfilePic')
                ->label('Foto Profil')
                ->image()
                ->maxSize(3072)
                ->imageEditor()
                ->directory("profil")
                ->before(function (Profile $profil) {
                    if ($profil->ProfilePic) {
                        Storage::disk('public')->delete($profil->ProfilePic);
                    }
                }),

                Textarea::make('biografi')
                ->label('Biografi')
                ->autosize()
                ->minLength(2)
                ->maxLength(2048),

                Textarea::make('alamat')
                ->label('Alamat')
                ->autosize()
                ->minLength(2)
                ->maxLength(2048),
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nim')
                ->label('NIM'),

                TextColumn::make('nama')
                ->searchable(),

                TextColumn::make('kelas'),

                ImageColumn::make('ProfilePic'),

                TextColumn::make('alamat')
                ->default("none"),

                TextColumn::make('biografi')
                ->default("none"),
            ])
            ->filters([
                SelectFilter::make('nama')
                ->label('Nama'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListProfiles::route('/'),
            'create' => Pages\CreateProfile::route('/create'),
            'edit' => Pages\EditProfile::route('/{record}/edit'),
        ];
    }
}
