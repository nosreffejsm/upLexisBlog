<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $dados = [
            'nome'=>'admin',
            'senha'=>bcrypt("admin"),
        ];
        if(usuario::where('usuario','=',$dados['usuario'])->count()){
            $usuario = usuario::where('usuario','=',$dados['usuario'])->first();
            $usuario->update($dados);
            echo "usuario alterado!";
        }else{
            user::create($dados);
            echo "usuario criado";
        }
    }
}

