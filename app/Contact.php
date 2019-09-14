<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $guarded = ['id'];
    public static $photo_links = [
        'profession/assistant',
        'profession/astronaut',
        'profession/businessman',
        'profession/captain',
        'profession/cashier',
        'profession/chef',
        'profession/concierge',
        'profession/cooker',
        'profession/courier',
        'profession/croupier',
        'profession/croupier-1',
        'profession/detective',
        'profession/disc-jockey',
        'profession/diver',
        'profession/doctor',
        'profession/doctor-1',
        'profession/engineer',
        'profession/farmer',
        'profession/firefighter',
        'profession/firefighter-1',
        'profession/gentleman',
        'profession/journalist',
        'profession/judge',
        'profession/loader',
        'profession/maid',
        'profession/manager',
        'profession/miner',
        'profession/motorcyclist',
        'profession/nun',
        'profession/nurse',
        'profession/pilot',
        'profession/policeman',
        'profession/postman',
        'profession/priest',
        'profession/scientist',
        'profession/sheriff',
        'profession/showman',
        'profession/soldier',
        'profession/soldier-1',
        'profession/stewardess',
        'profession/surgeon',
        'profession/swat',
        'profession/taxi-driver',
        'profession/teacher',
        'profession/thief',
        'profession/waiter',
        'profession/welder',
        'profession/worker',
        'profession/worker-1',
        'profession/writer'
    ];

    public static function getRandomPhotoLink(){
        $photo = self::$photo_links;
       return $photo[random_int(0, sizeof($photo) - 1)];
    }
    /**
     * @return mixed
     */
    public function getPhotoLink()
    {
        return asset('images/'.$this->getAttribute("photo_link").'.png');
    }

    public function getPhotoLinkAttribute($value){
        return asset('images/'.$value.'.png');
    }

    /**
     * @param mixed $photo_link
     */
    public function setPhotoLink($photo_link)
    {
        $this->attributes["photo_link"] = $photo_link;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->getAttribute("name");
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->attributes["name"] = $name;
    }

    /**
     * @return mixed
     */
    public function getDetails()
    {
        return $this->getAttribute("details");
    }

    /**
     * @param mixed $details
     */
    public function setDetails($details)
    {
        $this->attributes["details"] = $details;
    }

    /**
     * @return mixed
     */
    public function getLineNumber()
    {
        return $this->getAttribute("line_number");
    }

    /**
     * @param mixed $line_number
     */
    public function setLineNumber($line_number)
    {
        $this->attributes["line_number"] = $line_number;
    }


}
