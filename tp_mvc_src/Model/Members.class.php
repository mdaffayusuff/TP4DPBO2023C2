<?php

class Members extends DB
{

    function get()
    {
        $query = "SELECT * FROM members JOIN domisili WHERE members.id_domisili = domisili.id";
        return $this->execute($query);
    }

    function add($data)
    {
        // lengkapi
        $name = $data['name'];
        $email = $data['email'];
        $phone = $data['phone'];
        $dom = $data['domisili'];
        $join = $data['join_date'];
        $query = "INSERT INTO `members`(`name`, `email`, `phone`, `id_domisili`, `join_date`) VALUES ( '$name', '$email', '$phone', '$dom' , '$join')";
        // Mengeksekusi query
        return $this->execute($query);
    }

    function update($id, $data)
    {
        // lengkapi
        $name = $data['name'];
        $email = $data['email'];
        $phone = $data['phone'];
        $join = $data['join_date'];
        $dom = $data['domisili'];
        $query = "UPDATE members SET name='$name', email='$email', `phone`='$phone', `id_domisili`='$dom', `join_date`='$join' where `id`='$id'";
        // Mengeksekusi query
        return $this->execute($query);
    }

    function delete($id)
    {
        // lengkapi
        $query = "DELETE from `members` where id=$id";
        // Mengeksekusi query
        return $this->execute($query);
    }
}
