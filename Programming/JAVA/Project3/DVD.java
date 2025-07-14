/*
   Name: Jefferson T. Kim
   Date: 11/07/2021
   Course/Section: IT 206.DL2
   Assignment: Lab 9 

 * In this file, do the following things:
 * 1) Modify the class so that it inherits from Product
 * 2) Create a constructor that takes in a DVD title, DVD cost, and DVD genre
 * 3) Override the getCost() method by adding the DVD handling fee to the cost calculated for a Product
 */
 

public class DVD extends Product {
   public static final double HANDLING_FEE = 1.00;
   private String title;
   private double cost;
   private String genre;
   
   public DVD (String dvdTitle, double dvdCost, String genre) {
       if (title == null || title.equals("")) {
         throw new IllegalArgumentException("Enter a book title");
         }
      if (cost < 0) {
         throw new IllegalArgumentException("Enter a cost above 0");
         }
      if (genre == null || genre.equals("")) {
         throw new IllegalArgumentException("Enter a genre");
         }
       
         this.title = title;
         this.cost = cost;
         this.genre = genre;
   }

   public String getTitle() {
      return this.title;
   }

   public String getGenre() {
      return this.genre;
   }
   
   public double getCost() { return this.getCost(); }

   public void getCost(double dvdCost, double HANDLING_FEE) {
      double cost = dvdCost + HANDLING_FEE;
      }

   public String toString() {
      return "Genre: " + getGenre();
   }   
}

//*********************************************************
