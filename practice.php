//Write a PHP program to create a form with fields BookTitle, Author, and Price. Create a function insertBook() to insert values into database and displayBooks() to retrieve and display all records in an HTML table with proper headings.

<!DOCTYPE html>
<html>
<head>
    <title>d
        Practicing PHP for exams
    </title>
</head>
<body>
    <form method="POST" action="">
        BookTitle:<input type="text"  name="BookTitle">
        Author:<input type="text"  name = "Author">
        Price:<input type = "number"  name = "Price">
        <input type = "submit" name = "submit" value = "Submit">
    </form>

    $conn = mysqli_connect("localhost" , "root" , "" , "database");

    function insertBook($conn , $BookTitle , $Author , $Price){
        if(!conn){
            die('Connection Problem'.mysqli_error($conn));
        }

        $sql = mysqli_query($conn , "INSERT INTO (BookTitle , Author , Price) VALUES ("$BookTitle", "$Author" , "$Price"));
        if($sql){
            echo "Insertion Successfull";
        }
        else{
            echo "Connection Problem". mysqli_error($conn);
        }

    }

    function displayBook($conn){
        echo "<table border = '1'>
            <tr><th>BookTitle</th><th>Author</th><th>Price</th></tr>
        </table>"
        $result = mysqli_query($conn , 'SELECT * FROM database');
        while($rows = mysqli_fetch_assoc($result)){
            echo"
            <tr>
                <td>rowsd['dafdfa']</td>
            </tr>
            "
        }
    }

    if(isset(_POST['submit'])){
        
    }
</body>
</html>