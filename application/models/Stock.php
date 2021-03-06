<?php
/**
 * Created by PhpStorm.
 * User: kwanc
 * Date: 2016-10-05
 * Time: 3:44 PM
 */
class Stock extends CI_Model {

    // The data comes from http://www.quotery.com/top-100-funny-quotes-of-all-time/?PageSpeed=noscript
    var $data = array(
        array('id' => '1', 'name' => 'Applesauce Spice Cake', 'pic' => 'Applesauce_Spice_Cake.jpg', 'where' => '/sales/1', 'price' => '5' ,'order' => '0',
            'description' =>'Create the warm feelings of coziness and happiness with this Applesauce Spice Cake, a long-time favorite recipe that has been popular since Colonial Days!'),
        array('id' => '2',  'name' => 'Almond Tea Cake', 'pic' => 'Almond_Tea_Cake.jpg', 'where' => '/sales/2', 'price' => '5.75', 'order' => '5',
            'description' =>'It’s just the most wonderful moist cake that keeps very well. It will soon have your guests asking if you made “the cake” for them. With lots of almond goodness, it will be sure to be a crowd pleaser.'),
        array('id' => '3',  'name' => 'Apricot Bars', 'pic' => 'Apricot_Bars.jpg', 'where' => '/sales/3', 'price' => '6', 'order' => '10',
            'description' =>'These Apricot Bars make a delicious snack. They’re about as wholesome as it gets: oats, brown sugar, cinnamon and vanilla! Somewhere between a fruit bar and a crumble, they will surely taste yummy going down!'),
        array('id' => '4',  'name' => 'Blueberry Lemon Coffee Cake', 'pic' => 'BG_Blueberry_Lemmon_Coffee_Cake.jpg', 'where' => '/sales/4', 'price' => '3.75','order' => '6',
            'description' =>'A delicious dessert with blueberries that will entice everyone to have a bite.'),
        array('id' => '5',  'name' => 'Chocolate Brownies', 'pic' => 'Chocolate_Brownies.jpg', 'where' => '/sales/5', 'price' => '5.15', 'order' => '5',
            'description' =>'What don’t Brownie’s have going for them? They have great flavor, are simple to make and you can pair it with so many other great foods like marshmallows and ice cream! So rich, we love that these brownies are almost better the next day!'),
        array('id' => '6',  'name' => 'Swedish Rum Cake', 'pic' => 'Swedish_Rum_Cake.jpg', 'where' => '/sales/6', 'price' => '6', 'order' => '6',
            'description' =>'When you think of Sweden, you think of very tall, blonde, attractive…cakes of course! With hints of dark rum and citrusy lemon peel, you will not be able to resist seconds!'),
    );

    // Constructor
    public function __construct()
    {
        parent::__construct();
    }

    // retrieve a single quote
    public function get($which)
    {
        // iterate over the data until we find the one we want
        foreach ($this->data as $record)
            if ($record['id'] == $which)
                return $record;
        return null;
    }

    // retrieve all of the quotes
    public function all()
    {
        return $this->data;
    }

}
