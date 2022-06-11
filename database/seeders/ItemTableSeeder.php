<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Http;

use Illuminate\Http\Client\Response;

use Illuminate\Database\Seeder;

use App\Models\Item;

use Illuminate\Support\Collection;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //  $myClient = new \GuzzleHttp\Client([
        //     'headers' => ['User-Agent' => 'MyReader']
        //  ]);
        // $res = $client->request('GET', 'https://dev.shepherd.appoly.io/fruit.json');
        // $datas = json_decode($res->getBody()->getContents(), true);

        // dd($datas);

        //--------------------------------

        // $client = new \GuzzleHttp\Client();
        // $res = $client->request('GET', 'https://dev.shepherd.appoly.io/fruit.json');
        // $datas = json_decode($res->getBody()->getContents(), true);

        // dd($datas);

        // foreach($datas as $data){
        //     Item::create([
        //         'label' => $data['label']
        //     ]);
        // }

        $response = Http::get('https://dev.shepherd.appoly.io/fruit.json');

       // var_dump($data_json);

         $data_json = $response->object();

         foreach ($data_json->menu_items as $key => $item) {
            Item::create([ "label"     => $item->label ]);
            if (! empty($item->children)){
                foreach ($item->children as $child){
                Item::create([ "label"     => $child->label ]);
                        if (! empty($child->children)){
                        foreach ($child->children as $three){
                        Item::create([ "label"     => $three->label ]);
                         if (! empty($three->children)){
                        foreach ($three->children as $four){
                        Item::create([ "label"     => $four->label ]);
                                if (! empty($four->children)){
                                        foreach ($four->children as $five){
                                        Item::create([ "label"     => $five->label ]);
                                                if (! empty($five->children)){
                                                    foreach ($five->children as $six){
                                                    Item::create([ "label"     => $six->label ]);
                                                }
                                            }
                                        }
                                }
                    }
                }
            }
        }
    }

            }
        }
    }
}

     
         //var_dump($data_json);

        // $json_to_db [] = flatten_array($json_array);

        // $keys = array_keys($json_to_db);
        // for($i = 0; $i < count($json_to_db); $i++) {
        //     echo $keys[$i] . "{<br>";
        //     foreach($json_to_db[$keys[$i]] as $key => $value) {
        //         echo $key+1 . " : " . $value . "<br>";
        //     }
        //     echo "}<br>";
        // }

    //     foreach ($data_json->menu_items as $key => $value) {
    //         Item::create([ "label"     => $value->label ]);
    //         if (! empty($value->children)){
    //             foreach ($value->children as $child){
    //             Item::create([ "label"     => $child->label ]);
    //          }
    //         }
    //     }
    // }


 //  --------------------------------------------------------
 
            // if (empty($value->children)){
                
            // }else
            // {
               
            //          Item::create([ "label"     => $child->label ]);
            //     }
            

// ----------------------------------------
        // $json_to_db [] = flatten_array($json_array);

        // dd($json_to_db);

        // $keys = array_keys($json_to_db);
        // for($i = 0; $i < count($json_to_db); $i++) {
        //     echo $keys[$i] . "{<br>";
        //     foreach($json_to_db[$keys[$i]] as $key => $value) {
        //         echo $key+1 . " : " . $value . "<br>";
        //     }
        //     echo "}<br>";



        // $data_json = json_encode($data);

        // //dd($data_json);

        // foreach($data_json->menu_items as $item){
        //     Item::query()->updateOrCreate([
        //         'label'     => $item->label
        //     ]);
        // }


    // public function flatten_array(array $items, array $flattened = []){
    //     foreach ($items as $key => $item){
    //        if (is_array($item)){
    //           $flattened = flatten_array($item, $flattened);
    //           continue;
    //         }
    //       $flattened [] = $item;
    //     }
    //   return $flattened;
    // }


    //  public function array_flatten($a, $flat = []) {
    //     $entry = [];
    //     foreach ($a as $key => $el) {
    //         if (is_array($el)) {
    //             $flat = $this->array_flatten($el, $flat);
    //         } else {
    //             $entry[$key] = $el;
    //         }
    //     }
    //     if (!empty($entry)) {
    //         $flat[] = $entry;
    //     }
    //     return $flat;
    // }