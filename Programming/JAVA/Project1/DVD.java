//*********************************************************
/*
   Name: Jefferson T. Kim
   Date: 04/11/2022
   Course/Section: IT 206.2D1
   Assignment: Lab 9 
/*
/*
 * In this file, do the following things:
 * 1) Modify the class so that it inherits from Product
 * 2) Create a constructor that takes in a DVD title, DVD cost, and DVD genre
 * 3) Override the getCost() method by adding the DVD handling fee to the cost calculated for a Product
 */
 

public class DVD extends Product {
    public static final double HANDLING_FEE = 1.00;
    private String genre;

    public DVD(String dvdTitle, double dvdCost, String genre) {
        super(dvdTitle, dvdCost + HANDLING_FEE);
        if (dvdTitle == null || dvdTitle.equals("")) {
            throw new IllegalArgumentException("Enter a DVD title");
        }
        if (dvdCost < 0) {
            throw new IllegalArgumentException("Enter a cost above 0");
        }
        if (genre == null || genre.equals("")) {
            throw new IllegalArgumentException("Enter a genre");
        }
        this.genre = genre;
    }

    public String getGenre() {
        return this.genre;
    }

    @Override
    public double getCost() {
        return super.getCost();
    }

    @Override
    public String toString() {
        return super.toString() + ", Genre: " + getGenre();
    }
}
//*********************************************************