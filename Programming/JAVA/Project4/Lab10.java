/*
  * In this file, do the following things:
  * 1) Create a method to issue a book like return book
 * Note: All the methods should check if book is booked or not, then print                        
 * the output.)
  */
 public interface Library {
     // Start Part 1
     void check(boolean isBooked);
    // END Part 1
   boolean returnBook();

}
/*
  * In this file, do the following things:
  * 1) Create a constructor that takes in a book title and book’s unique ISBN number
  * 2) Create a toEquals() method to check if two books are same(books are same if ISBN is same)
  */
 public class Book {

    private String title;

    private int ISBN;



    // Start Part 1
   public Book(String title, int ISBN){
      if (title == null || title.equals("")) {
         throw new IllegalArgumentException("please enter a book title");
         }
      if (ISBN == null || ISBN.equals("")){
         throw new IllegalArgumentException("please enter an ISBN");
         }
      this.title = title;
      this.ISBN = ISBN;
    }

    // END Part 1
 
     public String getTitle() {

        return this.title;

    }



    public void setTitle(String title) {

        this.title = title;

    }



    public int getISBN() {

        return this.ISBN;

    }



    public void setISBN(int ISBN) {

        this.ISBN = ISBN;

    }



    @Override

    public String toString() {

        return "Book{" +

                "title='" + title + '\'' +

                ", ISBN=" + ISBN +

                '}';

    }

    // Start Part 2
     public int toEqauls(int ISBN) {
      if (ISBN == ISBN) {
       throw new IllegalArgumentException("this book has already been entered");
       }
      return getISBN();
     } 

    // END Part 2
 
     public int compareTo(Book s) {

        return getISBN() - s.getISBN();

    }

}
//*********************************************************
 
 /*
  * In this file, do the following things:
 * 1) Create a constructor for LibraryBook and assign all the variables
 * 1) Modify the class so that a LibraryBook object cannot be created.
  *    Instead, only subclass objects of LibraryBook can be created
  * 3) Modify the class so that all LibraryBook objects must use the Library interface(implement all the required methods in this class) and inherits Book. 
*/
 
 import javax.swing.JOptionPane;



public class LibraryBook {

    boolean isBooked;



    // Start Part 1
   public LibraryBook(boolean isBooked) {
      if(isBooked == null || isBooked.equals("")) {
         throw new IllegalArugmentException("please enter if it is booked");
         }
         this.isBooked = isBooked;
      }
    
    public boolean getIsBooked() { return this.isBooked; }
    // END Part 1





    public boolean isBooked() {

        return isBooked;

    }



    public void setBooked(boolean booked) {

        isBooked = booked;

    }

    // Start Part 3 Note: All the methods should check if book is booked or not, then flip the status of book being issued or not depending on action and print the output.)
   public class LibraryBook implements Library {
       boolean status = isBooked;
       
       public LibraryBook(boolean status) {
         if(status = true) {
            throw new IllegalArgumentException("this book is already issued");
            }
         else{ 
            status = false;
         }
         this.status = status;
    }
    
    public double getStatus() { return this.status; }
    // END Part 3
 
    @Override

    public String toString() {

        return "LibraryBook{" +

                "isBooked=" + isBooked +

                '}';

    }


 }
//*********************************************************
 
 /*
  * In this file, do the following things:
  * 1) Modify the class so that all ReferenceBook objects must inherit from the LibraryBook class
  * 2) Create a constructor that takes in a ReferenceBook bookname, isbn number, is the book booked, latedays ( cost is the late fee. It should be 0.75 * latedays)
  */
 
 
 public class ReferenceBook{

    public static final double LATE_DAY_RATE = 0.75;

    private double cost;

    // Start Part 2
    public ReferenceBook(double cost, int lateDays) {
      super(title, ISBN ,isBooked);
      if (cost < 0.00) {
         throw new IllegalArgumentException("please enter a cost above 0.00");
         }
      if (lateDays < 0) {
         throw new IllegalArgumentException("please enter a positive amount of days");
         }
      this.cost = cost;
      this.lateDays = lateDays;
      }


    public double getCost() { return this.cost; }
    public int getLateDays() { return this.lateDays; }


    // END Part 2



    public double getCost() {

        return cost;

    }



    public void setCost(double cost) {

        this.cost = cost;

    }



    @Override

    public String toString() {

        return "ReferenceBook{" +

                "isBooked=" + isBooked +

                ", cost=" + cost +

                '}';

    }

}
/*
  * In this file, do the following things:
  * 1) Modify the class so that all CourseBook objects must inherit from the LibraryBook class
  * 2) Create a constructor that takes in a CourseBook bookname, isbn number, is the book booked, latehours ( cost is the late fee.. It should be 0.25 * latehours)
  */
 public class CourseBook{

    private double cost;



    // Start Part 2
   public CourseBook(double cost, int lateHours){
      super(title, ISBN, isBooked, lateHours);
      if(cost < 0.00) {
         throw new IllegalArgumentException("please enter a cost");
         }
      if (lateHours < 0){
         throw new IllegalArugmentException("please enter hours");
         }
      this.cost = cost;
      this.lateHours = lateHours;
    }

    public double getCost() { return this.cost; }
    public int getLateHours() { return this.lateHours; }
    // END Part 2



    public double getCost() {

        return cost;

    }



    public void setCost(double cost) {

        this.cost = cost;

    }



    @Override

    public String toString() {

        return "CourseBook{" +

                "cost=" + cost +

                ", isBooked=" + isBooked +

                '}';

    }

}
/*
  * In this file, complete tasks as identified below, only inside of the commented areas
  */
 
 import javax.swing.JOptionPane;



public class UserInformation {

    public static void main(String[] args) {

        final int MAX_BOOKS = 2;
        LibraryBook[] books =new LibraryBook[MAX_BOOKS];
        addBooks(books);
        displayBooks(books[0],books[1]);

    }



    private static void addBooks(LibraryBook[] books) {



        // BEGIN: In the books array, hardcode the creation of two different kinds of books,
         // set CourseBook (Name: “Java Basics”,ISBN: “12345”, Booked: “Yes”, latehours: 20)
         // set ReferenceBook(Name: “Java 101”,ISBN: “12346”, Booked: “No”, latedays: 0)
        LibraryBook[0] book1 = new CourseBook("Java Basics", "12345", true, 20);
        LibraryBook[1] book2 = new ReferenceBook("Java 101", "12346", false, 0);
        // END
     }



    private static void displayBooks(LibraryBook book1,LibraryBook book2) {

        String results = "***GMU’s Library***\n\n";

        results += "Books are: \n\n";

        // BEGIN: print the two books in ascending order of ISBN number use equals and compareTo for this code (Fill in the if statement)
         if(LibraryBook[0].compareTo(LibraryBook[1]) > 0 && book1.ISBN().equals(book1.ISBN())

        {

            results+= book1.getISBN() +":"+ book1.getTitle()+ "\n";

            results+= book2.getISBN() +":"+ book2.getTitle()+ "\n";

        }else {

            results+= book2.getISBN() +":"+ book2.getTitle()+ "\n";

            results+= book1.getISBN() +":"+ book1.getTitle()+ "\n";

        }

        JOptionPane.showMessageDialog(null, results);

        // END
     }

}