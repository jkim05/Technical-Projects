public abstract class Organization {
   private String name;
   private int numEmployees;
   public static final double TAX_RATE = 0.01;

   public String getName() { return this.name; }
   public int getNumEmployees() { return this.numEmployees; }
    
   public abstract double calculateTax() {
      return this.numEmployees * TAX_RATE;
   }
}