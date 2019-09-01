<?php 
include 'database.php';
/**
 * summary
 */
class User
{
    /**
     * summary
     */
    private $db ;
    public $msg="";
    public function __construct(){
    	$this->db = new Database();
    }

    public function Registration($data){

            $username = $data['username'];
            $password = $data['password'];
            $name = $data['name'];
            $gender = $data['gender'];
            $contact = $data['contact'];
            $email = $data['email'];
            $address = $data['address'];
            if ($this->getuser($name)) {
                $msg = "User name already exist";
                return;
            }
            $sql = "INSERT INTO `regis` (`username`, `password`, `name`,`gender`, `contact`, `email`, `address`) VALUES ( :username, :password , :name, :gender, :contact, :email, :address)";
            $query = $this->db->pdo->prepare($sql);
                $query->bindValue(":username", $username);
                $query->bindValue(":password", $password);
                $query->bindValue(":name", $name);
                $query->bindValue(":gender", $gender);
                $query->bindValue(":contact", $contact);
                $query->bindValue(":email", $email);
                $query->bindValue(":address", $address);
                $query->execute();
                if ($query) {
                    return true;
                }else {
                    return false;
                }

        }
    public function getuser($data)
        {
            $sql = "SELECT * FROM regis WHERE name = :data";
            $query = $this->db->pdo->prepare($sql);
            $query->bindValue(":data", $data);
            $query->execute();
            if ($query->rowCount()) {
                return true;
            }else {
                return false;
            }
        }
    public function Feedback($data)
        {
            $name = $data['name'];
            $contact = $data['contact'];
            $email = $data['email'];
            $message = $data['message'];
            $sql = "INSERT INTO `feedback` (`name`, `contact`, `email`, `message`) VALUES ( :name, :contact, :email, :message)";
            $query = $this->db->pdo->prepare($sql);
            $query = $this->db->pdo->prepare($sql);
                $query->bindValue(":name", $name);
                $query->bindValue(":contact", $contact);
                $query->bindValue(":email", $email);
                $query->bindValue(":message", $message);
                $query->execute();
                if ($query) {
                    return true;
                }else {
                    return false;
                }
        }

    public function login($data)
        {
            $name = $data['name'];
            $password = $data['password'];
            $type = $data['type'];
            $sql = "SELECT * FROM regis WHERE username = :name AND password = :password AND type = :type";
            $query = $this->db->pdo->prepare($sql);
            $query->bindValue(":name", $name);
            $query->bindValue(":password", $password);
            $query->bindValue(":type", $type);
            $query->execute();
            if ($query->rowCount()) {
                return $query->fetch(PDO::FETCH_ASSOC);
            }else {
                return false;
            }
        }

        public function getAllUser()
            {
                $sql = "SELECT * FROM regis";
                $query = $this->db->pdo->prepare($sql);
                $query->execute();
                if ($query->rowCount()) {
                    return $query->fetchAll(PDO::FETCH_ASSOC);
                }else {
                    return false;
                }
            }
            public function getAllFeedback()
            {
                $sql = "SELECT * FROM feedback";
                $query = $this->db->pdo->prepare($sql);
                $query->execute();
                if ($query->rowCount()) {
                    return $query->fetchAll(PDO::FETCH_ASSOC);
                }else {
                    return false;
                }
            }

            public function AddStaff($data){
               $name = $data['name'];
               $contact = $data['contact'];
               $gender = $data['gender'];
               $address = $data['address'];
               if ($this->getuser($name)) {
                   return;
               }
               $sql = "INSERT INTO `staff` (`name`, `contact`, `gender`, `address`) VALUES ( :name, :contact, :gender, :address)";
               $query = $this->db->pdo->prepare($sql);
                   $query->bindValue(":name", $name);
                   $query->bindValue(":contact", $contact);
                   $query->bindValue(":gender", $gender);
                   $query->bindValue(":address", $address);
                   $query->execute();
                   if ($query) {
                       return true;
                   }else {
                       return false;
                   } 
            }
            public function getStaff($data)
                {
                    $sql = "SELECT * FROM staff WHERE name = :data";
                    $query = $this->db->pdo->prepare($sql);
                    $query->bindValue(":data", $data);
                    $query->execute();
                    if ($query->rowCount()) {
                        return true;
                    }else {
                        return false;
                    }
                }
            public function getAllStaff()
                {
                    $sql = "SELECT * FROM staff";
                    $query = $this->db->pdo->prepare($sql);
                    $query->execute();
                    if ($query->rowCount()) {
                        return $query->fetchAll(PDO::FETCH_ASSOC);
                    }else {
                        return false;
                    }
                }
            public function itemInsert($data){
               $path = "img/image/".basename($_FILES["file"]["name"]);
               $file = basename($_FILES['file']['name']);
               $name = $data['name'];
               $category = $data['category'];
               $price = $data['price'];
               $description = $data['description'];
               if ($this->getItem($name)) {
                   return;
               }
               move_uploaded_file($_FILES['file']['tmp_name'],$path);
               $sql = "INSERT INTO `product` (`name`, `category`, `price`, `description`, `img`) VALUES ( :name, :category, :price, :description, :img)";
               $query = $this->db->pdo->prepare($sql);
                   $query->bindValue(":name", $name);
                   $query->bindValue(":category", $category);
                   $query->bindValue(":price", $price);
                   $query->bindValue(":description", $description);
                   $query->bindValue(":img", $file);
                   $query->execute();
                   if ($query) {
                       return true;
                   }else {
                       return false;
                   } 
            }
            public function getItem($data)
                {
                    $sql = "SELECT * FROM product WHERE name = :data";
                    $query = $this->db->pdo->prepare($sql);
                    $query->bindValue(":data", $data);
                    $query->execute();
                    if ($query->rowCount()) {
                        return true;
                    }else {
                        return false;
                    }
                }
            public function getItemByCat($data)
                {
                  $cat = $data['cat'];
                    $sql = "SELECT * FROM product WHERE category = :cat";
                    $query = $this->db->pdo->prepare($sql);
                    $query->bindValue(":cat", $cat);
                    $query->execute();
                    if ($query->rowCount()) {
                        return $query->fetchAll(PDO::FETCH_ASSOC);
                    }else {
                        return false;
                    }
                }
            public function getAllPro()
                {
                    $sql = "SELECT * FROM product";
                    $query = $this->db->pdo->prepare($sql);
                    $query->execute();
                    if ($query->rowCount()) {
                        return $query->fetchAll(PDO::FETCH_ASSOC);
                    }else {
                        return false;
                    }
                }


                public function AddNews($data){
                   $news = $data['news'];
                   $sql = "INSERT INTO `news` (`news`) VALUES ( :news)";
                   $query = $this->db->pdo->prepare($sql);
                       $query->bindValue(":news", $news);
                       $query->execute();
                       if ($query) {
                           return true;
                       }else {
                           return false;
                       } 
                }
                public function getAllNews()
                    {
                        $sql = "SELECT * FROM news";
                        $query = $this->db->pdo->prepare($sql);
                        $query->execute();
                        if ($query->rowCount()) {
                            return $query->fetchAll(PDO::FETCH_ASSOC);
                        }else {
                            return false;
                        }
                    }

                public function Delete($value)
                {
                  $v = $value['id'];
                  $sql = "DELETE FROM news WHERE id = $v";
                  $query = $this->db->pdo->prepare($sql);
                        $query->execute();
                        if ($query->rowCount()) {
                            return true;
                        }else {
                            return false;
                        }
                }

               public function Book($data){
                $cname = $data['cname'];
                $cphone = $data['cphone'];
                  $id = $data['id'];
                  $person = $data['person'];
                  $timest = $data['timest'];
                  $datest = $data['datest'];
                  $req = rand(33,99);
                  if ($this->Bookid($id)) {
                    return 0;
                  }
                  $sql = "UPDATE `booking` SET `cname` = :cname, `cphone` = :cphone, `person` = :person, `time` =:timest, `date` = :datest, req = :req WHERE `id` = :id";
                  $query = $this->db->pdo->prepare($sql);
                  $query->bindValue(":cname", $cname);
                  $query->bindValue(":cphone", $cphone);
                      $query->bindValue(":id", $id);
                      $query->bindValue(":person", $person);
                      $query->bindValue(":timest", $timest);
                      $query->bindValue(":datest", $datest);
                      $query->bindValue(":req", $req);
                      $query->execute();
                      if ($query) {
                          return $req;
                      }else {
                          return false;
                      } 
               } 
               public function Bookid($id)
                 {
                   $sql = "SELECT * FROM booking WHERE id = $id AND req = 0";
                   $query = $this->db->pdo->prepare($sql);
                   $query->execute();
                        if ($query->rowCount()) {
                            return false;
                        }else {
                            return true;
                        } 
                 }


                 public function Bookstat($data)
                 {
                  $id = $data['id'];
                   $sql = "SELECT * FROM booking WHERE req = $id";
                   $query = $this->db->pdo->prepare($sql);
                   $query->execute();
                        if ($query->rowCount()) {
                           return $query->fetch(PDO::FETCH_ASSOC);
                        }else {
                            return true;
                        } 
                 }
                  public function insertBill($data)
                  {
                    $cname = $data['cname'];
                    $pname = $data['pname'];
                    $category = $data['category'];
                    $bill = $data['price']*$data['qntty'];
                    $sql = "INSERT INTO `bill` (`cname`, `pname`, `category`, `bill`) VALUES ( :cname, :pname, :category, :bill)";
                    $query = $this->db->pdo->prepare($sql);
                        $query->bindValue(":cname", $cname);
                        $query->bindValue(":pname", $pname);
                        $query->bindValue(":category", $category);
                        $query->bindValue(":bill", $bill);
                        $query->execute();
                        if ($query) {
                            return true;
                        }else {
                            return false;
                        } 
                  }
                  public function getAllbill($data)
                  {
                    $cname = $data['cname'];
                    $sql = "SELECT * FROM bill WHERE cname = :cname";
                    $query = $this->db->pdo->prepare($sql);
                        $query->bindValue(":cname", $cname);
                        $query->execute();
                        if ($query) {
                            return $query->fetchAll(PDO::FETCH_ASSOC);
                        }else {
                            return false;
                        } 
                  }

                public function BookAll()
                 {
                   $sql = "SELECT * FROM booking";
                   $query = $this->db->pdo->prepare($sql);
                   $query->execute();
                        if ($query->rowCount()) {
                           return $query->fetchAll(PDO::FETCH_ASSOC);
                        }else {
                            return true;
                        } 
                 }

                public function Accpt($data)
                { $id = $data['id'];
                  $sql = "UPDATE booking SET action = 1 WHERE id = $id";
                  $query = $this->db->pdo->prepare($sql);
                   $query->execute();
                        if ($query->rowCount()) {
                           return true;
                        }else {
                            return true;
                        } 
                }
                public function Clear($data)
                { $id = $data['clr'];
                  $sql = "UPDATE booking SET cname= null, cphone= 0, action = 0, req = 0, person = null, date = null, time = null WHERE id = $id";
                  $query = $this->db->pdo->prepare($sql);
                   $query->execute();
                        if ($query->rowCount()) {
                           return true;
                        }else {
                            return true;
                        } 
                }
}
 ?>