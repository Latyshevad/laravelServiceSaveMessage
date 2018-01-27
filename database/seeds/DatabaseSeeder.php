<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('UserTableSeeder');
        $this->call('MessageTableSeeder');
    }
}

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->truncate();
        $this->command->info('Clear table "users".');
        $this->insertUsers();
        $this->command->info("New data inserted!");
    }

    private function dateUsers()
    {
        return [
            ['name' => 'Andre', 'email' => 'Andre@Andre.ru', 'password' => '123456'],
            ['name' => 'Tony', 'email' => 'Tony@Tony.ru', 'password' => '123456'],
            ['name' => 'Mikle', 'email' => 'Mikle@Mikle.ru', 'password' => '123456'],
            ['name' => 'Eugene', 'email' => 'Eugene@Eugene.ru', 'password' => '123456']
        ];
    }

    private function insertUsers()
    {
        $data = $this->dateUsers();
        foreach ($data as $item) {
            User::create([
                'name' => $item['name'],
                'email' => $item['email'],
                'password' => bcrypt($item['password'])
            ]);
            $this->command->info('Insert user "' . $item['name'] . '"');
        }
    }
}

class MessageTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('messages')->truncate();
        $this->command->info('Clear table "Messages"');
        $this->insertMessageToDB();
        $this->command->info('New data inserted');
    }

    private function dataMessage()
    {
        return [
            ['user_id' => 1, 'text_message' => 'Развивая эту тему, типизация отталкивает амфибрахий – это уже пятая стадия понимания по М.Бахтину.'],
            ['user_id' => 2, 'text_message' => 'Метафора выбирает мифологический поток сознания, несмотря на отсутствие единого пунктуационного алгоритма. Матрица абсурдно нивелирует подтекст, особенно подробно рассмотрены трудности, с которыми сталкивалась женщина-крестьянка в 19 веке. Комбинаторное приращение нивелирует мелодический дискурс, несмотря на отсутствие единого пунктуационного алгоритма. Расположение эпизодов вызывает литературный эпитет, также необходимо сказать о сочетании метода апроприации художественных стилей прошлого с авангардистскими стратегиями.'],
            ['user_id' => 3, 'text_message' => 'Цикл, без использования формальных признаков поэзии, диссонирует мелодический скрытый смысл, но не рифмами. Эстетическое воздействие, не учитывая количества слогов, стоящих между ударениями, притягивает реципиент, заметим, каждое стихотворение объединено вокруг основного философского стержня.'],
            ['user_id' => 4, 'text_message' => 'Привет! Как твои дела?']
        ];
    }

    public function insertMessageToDB()
    {
        $data = $this->dataMessage();
        foreach ($data as $item) {
            DB::table('messages')->insert([
                'user_id'=>$item['user_id'],
                'text_message'=>$item['text_message'],
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ]);
        }
        $count = DB::table('messages')->count();
        $this->command->info("Added data for table 'messages'. Count message: ".$count);
    }
}