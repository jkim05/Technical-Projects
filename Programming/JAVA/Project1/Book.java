//*********************************************************
/*
   Name: Jefferson T. Kim
   Date: 04/11/2022
   Course/Section: IT 206.2D1
   Assignment: Lab 9 
*/
import java.util.Objects;

//*********************************************************

/*
 * In this file, do the following things:
 * 1) Modify the class so that it inherits from Product
 * 2) Create a constructor that takes in a book title and book cost
 */


public class Book extends Product {
    private String title;

    public Book(String title, double cost) {
        super(title, cost);
        if (title == null || title.equals("")) {
            throw new IllegalArgumentException("Enter a book title");
        }
        this.title = title;
    }

    public String getTitle() {
        return super.getTitle();
    }

    @Override
    public double getCost() {
        return super.getCost();
    }

    @Override
    public String toString() {
        return "Book: " + getTitle();
    }

    @Override
    public boolean equals(Object obj) {
        if (this == obj) {
            return true;
        }
        if (obj == null || getClass() != obj.getClass()) {
            return false;
        }
        Book other = (Book) obj;
        return Objects.equals(this.title, other.title) && Double.compare(this.getCost(), other.getCost()) == 0;
    }

    @Override
    public int hashCode() {
        return Objects.hash(title, getCost());
    }
}
//*********************************************************