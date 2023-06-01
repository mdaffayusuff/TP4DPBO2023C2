<?php

class Domisili extends DB
{
    function get()
    {
        $query = "SELECT * FROM domisili";
        return $this->execute($query);
    }

    function add($data)
    {
        // lengkapi
        $dom = $data['domisili'];
        $query = "INSERT INTO `domisili` (`domisili`) VALUES ('$dom')";
        // Mengeksekusi query
        return $this->execute($query);
    }

    function update($id, $data)
    {
        // lengkapi
        $dom = $data['domisili'];
        $query = "UPDATE domisili SET `domisili`='$dom' where id='$id'";
        echo $dom;
        // Mengeksekusi query
        return $this->execute($query);
    }

    function delete($id)
    {
        // lengkapi
        $query = "DELETE from `domisili` where id=$id";
        // Mengeksekusi query
        return $this->execute($query);
    }
}
