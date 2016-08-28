<?php

use Illuminate\Database\Seeder;

class LivroTabelaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \App\Livro::truncate();

        \App\Livro::create([
            "titulo" => "1984",
            "autor"=> "George Orwell",
            "editora"=> "Sao Paulo",
            "publicacao"=> Carbon\Carbon::create(1949,7,2),
            "descricao"=>"Winston, herói de 1984, último romance de George Orwell, vive aprisionado na engrenagem totalitária de uma sociedade completamente dominada pelo Estado, onde tudo é feito coletivamente, mas cada qual vive sozinho. Ninguém escapa à vigilância do Grande Irmão, a mais famosa personificação literária de um poder cínico e cruel ao infinito, além de vazio de sentido histórico. De fato, a ideologia do Partido dominante em Oceânia não visa nada de coisa alguma para ninguém, no presente ou no futuro. O'Brien, hierarca do Partido, é quem explica a Winston que \"só nos interessa o poder em si. Nem riqueza, nem luxo, nem vida longa, nem felicidade: só o poder pelo poder, poder puro.\" ",
            "image"=>"1984.jpg"
        ]);

        \App\Livro::create([
            "titulo" => "Cem Anos de Solidão",
            "autor"=> "Gabriel García Márquez",
            "editora"=> "Sao Paulo",
            "publicacao"=> Carbon\Carbon::create(1996,8,6),
            "descricao"=>"Cem Anos de Solidão é uma obra do escritor colombiano Gabriel García Márquez, Prémio Nobel da Literatura em 1982, e é atualmente considerada uma das obras mais importantes da literatura latino-americana. ",
            "image"=>"100solidao.jpg"
        ]);

        \App\Livro::create([
            "titulo" => "Jesusalém",
            "autor"=> "Mia Couto",
            "editora"=> "Caminhos",
            "publicacao"=> Carbon\Carbon::create(2009,10,9),
            "descricao"=>"Jesusalém é seguramente a mais madura e mais conseguida obra de um escritor em plena posse das suas capacidades criativas...",
            "image"=>"jerusalem.jpg"
        ]);

        \App\Livro::create([
            "titulo" => "O sétimo juramento",
            "autor"=> "Paulina Chiziane",
            "editora"=> "Caminhos",
            "publicacao"=> Carbon\Carbon::create(2000,5,12),
            "descricao"=>" Um mergulho no mundo obscuro da Magia Negra, numa África atual devastada por guerras, greves e muita corrupção, este livro é também a denúncia de uma realidade a que preferimos fechar os olhos.
                           David, antigo revolucionário que lutou pelos direitos dos trabalhadores, é agora diretor de uma empresa estatal da qual desvia fundos sem os quais não consegue, há mais de seis meses, pagar os salários aos operários.",
             "image"=>"7.jpg"
        ]);

        \App\Livro::create([
            "titulo" => "A brevidade da Vida",
            "autor"=> "Seneca",
            "editora"=> "Filosofia",
            "publicacao"=> Carbon\Carbon::create(2000,5,12),
            "descricao"=>"é um ensaio moral composto por Sêneca (Sêneca, o Jovem), um filósofo estóico da Roma antiga, a seu amigo (e possivelmente cunhado) Paulinus.Neste escrito o filósofo levanta vários princípios estóicos sobre a natureza do tempo, como por exemplo, que os seres humanos despendem muito de seu tempo perseguindo objetivos sem valor ou sentido.
                          Segundo suas palavras, a natureza concede o tempo necessário a cada indivíduo para que ele/ela possa realizar o que realmente é importante na vida, portanto exigindo que cada ser humano organize bem o seu tempo.",
            "image"=>"seneca.jpg"
        ]);
    }
}
