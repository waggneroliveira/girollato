<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'topico sobre'=>[
                'Criar',
                'Editar',                
                'Visualizar',
                'Remover'
            ],
            'anuncio'=>[
                'Criar',
                'Editar',                
                'Visualizar',
                'Remover'
            ],
            'auditoria'=>[
                'Visualizar',
            ],
            'categorias do noticias'=>[
                'Criar',
                'Editar',                
                'Visualizar',
                'Remover'
            ],
            'contato'=>[
                'Criar',
                'Editar',                
                'Visualizar',
                'Remover'
            ],
            'sessao anuncie'=>[
                'Criar',
                'Editar',                
                'Visualizar',
                'Remover'
            ],
            'email'=>[
                'Visualizar',
                'configurar smtp',
                'testar conexao smtp'
            ],
            'agenda'=>[
                'Criar',
                'Editar',                
                'Visualizar',
                'Remover'
            ],
            'grupo'=>[
                'Criar',
                'Editar',                
                'Visualizar',
                'Remover'
            ],
            'lead contato'=>[
                'Visualizar',
                'Remover'
            ],
            'newsletter'=>[
                'Visualizar',
                'Remover'
            ],
            'noticias'=>[
                'Criar',
                'Editar',                
                'Visualizar',
                'Aprovar, Reprovar ou Remover Comentário',
                'Remover'
            ],
            'notificacao'=>[               
                'Visualizar',
                'Notificacao de auditoria',
            ],
            'sobre nos'=>[
                'Criar',
                'Editar',                
                'Visualizar',
                'Remover'
            ],
            'usuario'=>[
                'Criar',
                'Editar',
                'Visualizar',
                'Remover',
                'Visualizar outros usuarios',
                'Atribuir grupos',
                'Tornar usuario master'
            ],
            'videos'=>[
                'Criar',
                'Editar',                
                'Visualizar',
                'Remover'
            ],
        ];

        foreach($permissions as $key => $permission){
            foreach($permission as $value){
                Permission::create([
                    'name'=>strtolower("{$key}.{$value}")
                ]);
            }
        }
    }
}
