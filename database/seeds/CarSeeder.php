<?php

use Illuminate\Database\Seeder;
use App\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Car::truncate();

        Car::create(array('id' => 1,'model' => 'E klase','color' => 'grey','mileage' => 3000,'price' => '54000','year' => '2020','automatic'=>'1','condition'=>'Excellent - A close to perfect original'));
        Car::create(array('id' => 2,'model' => 'E klase','color' => 'black','mileage' => 14000,'price' => '30000','year' => '2016','automatic'=>'0','condition'=>'Excellent - A close to perfect original'));
        Car::create(array('id' => 3,'model' => 'E klase','color' => 'black','mileage' => 7000,'price' => '35000','year' => '2020','automatic'=>'1','condition'=>'Fair condition - Runs and drives OK but needs repair'));
        Car::create(array('id' => 4,'model' => 'E klase','color' => 'white','mileage' => 1000,'price' => '55000','year' => '2019','automatic'=>'0','condition'=>'Good condition - Presentable inside'));
        Car::create(array('id' => 5,'model' => 'G klase','color' => 'black','mileage' => 6000,'price' => '70000','year' => '2018','automatic'=>'1','condition'=>'Fair condition - Runs and drives OK but needs repair'));
        Car::create(array('id' => 6,'model' => 'G klase','color' => 'white','mileage' => 3000,'price' => '64000','year' => '2019','automatic'=>'0','condition'=>'Good condition - Presentable inside'));
        Car::create(array('id' => 7,'model' => 'G klase','color' => 'black','mileage' => 4000,'price' => '70000','year' => '2017','automatic'=>'1','condition'=>'Fair condition - Runs and drives OK but needs repair'));
        Car::create(array('id' => 8,'model' => 'G klase','color' => 'brown','mileage' => 500,'price' => '69000','year' => '2020','automatic'=>'1','condition'=>'Excellent - A close to perfect original'));
        Car::create(array('id' => 9,'model' => 'V klase','color' => 'grey','mileage' => 3500,'price' => '54000','year' => '2019','automatic'=>'0','condition'=>'Excellent - A close to perfect original'));
        Car::create(array('id' => 10,'model' => 'V klase','color' => 'red','mileage' => 2000,'price' => '41000','year' => '2017','automatic'=>'1','condition'=>'Fair condition - Runs and drives OK but needs repair'));
        Car::create(array('id' => 11,'model' => 'V klase','color' => 'white','mileage' => 8000,'price' => '67000','year' => '2020','automatic'=>'1','condition'=>'Good condition - Presentable inside'));
        Car::create(array('id' => 12,'model' => 'V klase','color' => 'black','mileage' => 200,'price' => '74000','year' => '2019','automatic'=>'0','condition'=>'Excellent - A close to perfect original'));
        Car::create(array('id' => 13,'model' => 'CLS klase','color' => 'black','mileage' => 50,'price' => '38000','year' => '2018','automatic'=>'1','condition'=>'Good condition - Presentable inside'));
        Car::create(array('id' => 14,'model' => 'CLS klase','color' => 'white','mileage' => 1500,'price' => '38500','year' => '2017','automatic'=>'1','condition'=>'Fair condition - Runs and drives OK but needs repair'));
        Car::create(array('id' => 15,'model' => 'CLS klase','color' => 'brown','mileage' => 1200,'price' => '44000','year' => '2020','automatic'=>'0','condition'=>'Excellent - A close to perfect original'));
        Car::create(array('id' => 16,'model' => 'CLS klase','color' => 'grey','mileage' => 3300,'price' => '36000','year' => '2018','automatic'=>'1','condition'=>'Good condition - Presentable inside'));
        Car::create(array('id' => 17,'model' => 'GLE klase','color' => 'black','mileage' => 600,'price' => '58000','year' => '2020','automatic'=>'1','condition'=>'Excellent - A close to perfect original'));
        Car::create(array('id' => 18,'model' => 'GLE klase','color' => 'blue','mileage' => 5000,'price' => '37300','year' => '2019','automatic'=>'0','condition'=>'Fair condition - Runs and drives OK but needs repair'));
        Car::create(array('id' => 19,'model' => 'GLE klase','color' => 'grey','mileage' => 3210,'price' => '36400','year' => '2018','automatic'=>'1','condition'=>'Good condition - Presentable inside'));
        Car::create(array('id' => 20,'model' => 'GLE klase','color' => 'white','mileage' => 400,'price' => '53000','year' => '2020','automatic'=>'1','condition'=>'Excellent - A close to perfect original'));
    }
}
