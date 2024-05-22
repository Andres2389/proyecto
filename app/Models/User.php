    <?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    /**
     * Class User
     *
     * @property $id
     * @property $rol
     * @property $documento
     * @property $name
     * @property $apellidos
     * @property $correo_electronico
     * @property $contraseña
     * @property $telefono
     * @property $tipo_etapa
     * @property $programa_formacion
     * @property $ficha
     * @property $instructor_asignado
     * @property $created_at
     * @property $updated_at
     *
     * @property Bitacora[] $bitacoras
     * @package App
     * @mixin \Illuminate\Database\Eloquent\Builder
     */
    class User extends Model
    {
        
        protected $perPage = 20;

        /**
         * The attributes that are mass assignable.
         *
         * @var array<int, string>
         */
        protected $fillable = ['rol', 'documento', 'name', 'apellidos', 'correo_electronico', 'contraseña', 'telefono', 'tipo_etapa', 'programa_formacion', 'ficha', 'instructor_asignado'];


        /**
         * @return \Illuminate\Database\Eloquent\Relations\HasMany
         */
        public function bitacoras()
        {
            return $this->hasMany(\App\Models\Bitacora::class, 'id', 'id_usuario');
        }
        
    }
