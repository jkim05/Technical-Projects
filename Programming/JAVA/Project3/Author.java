public class Author {
   private int id;
   private String name;
   private double salary;
   private static int idValue = 50;
   
   public Author(String name) {
     this.name = name;
     this.id = idValue++;
     }
     
   public Author(String name, double salary) {
      this(name);
      this.salary = salary;
      }
      
   public int getId() { return this.id; }
   public String getName() { return this.name; }
   public double getSalary() { return this.salary; }
   public static int getIdValue() {return idValue; }
   
   public String toString(){
      return this.getName() + "Has a salary of " + String.format("$%.2f", this.getSalary());
      }
   }
   
   import javax.swing.JOptionPane;
   
   public class AuthorImplementation {
      public static void main(String[] args) {
      Author a1 = new Author("Hugo Furst");
      Author a2 = new Author("Ima Programmer", 75000.00);
      
      JOptionPane.showMessageDialog(null, Author.getIdValue());
      }
  }