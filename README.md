# GPTS Assignment

This is a core PHP based web application built using MySQL database. It is recommended to run this project on an Apache2 server with PHP 7. Jquery is used to make it interactive.

## Features of the application

1. Listing all the products on the Home Page
2. Options to filter the products based on the Categories
3. View the Details of the product and the related products
4. Add products to the cart with update/delete options
5. Add a product into the database from the admin page at `$project_root/admin`

## Installation Instructions
1. Install Apache2 and MySQL with phpmyadmin
2. Clone the repository into the apache root folder
```
$ git clone https://github.com/abhishekbvs/gpts-assignment.git
```
3. Create a database with `gpts-shop` name
4. Import the MySQl dump file `dump.sql` to create the tables with sample data
5. Update the username and password of the mysql user in `db.php`

Now the website is live.

## Screenshots

### Home Page

![Home Page](https://raw.githubusercontent.com/abhishekbvs/gtps-assignment/master/images/home.png)

### Product Page
![Product Page](https://raw.githubusercontent.com/abhishekbvs/gtps-assignment/master/images/product.png)

### Cart Page
![Cart Page](https://raw.githubusercontent.com/abhishekbvs/gtps-assignment/master/images/cart.png)

### Admin Page
![Admin Page](https://raw.githubusercontent.com/abhishekbvs/gtps-assignment/master/images/admin.png)