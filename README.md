# Etsy Clone
> Etsy clone project to practice my inertia laravel skills

## Roles

### Users
Users can buy products authenticated or not. So it is not required to be logged in to buy an product. When logged in the bought product will be put in the orders model which is connected to the user.

### Shop
A shop is connected to a user. So a if a user wants to make a shop he or she have to have an account. So every shop has one user aka the owner. A shop has a collection of products. And a shop have of course a collection of orders.

### Products
Every product is connected to a shop. So a product has to be connected to a shop. Shops create the products. The product has besides the base product attributes a attribute product images which is an collection of images and a thumbnail which has to be one of the product images collection.

### Orders 
Everytime a user checks out it will create a order item in the database. Which contains the products of the user. The order item is connected to the user and the shop. 

### Todos
- [ ]  Add darkmode