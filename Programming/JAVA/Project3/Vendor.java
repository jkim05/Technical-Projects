/*
   Name: Jefferson T. Kim
   Date: 10/09/2021
   Course/Section: IT 206.DL2
   Assignment: Assignment 4 (Solution Implementation) 
  
   Description: 
   
   
   
   */


public class Vendor{
   private String vendor_ID;
   private String vendor_Name;
   private String vendor_Type;
   private double cost;
   private double totalCost;
   
   
   public static final int MIN_VENDORS = 1;
   public static final int MAX_VENDORS = 50;
   public static final int MAX_INTERVIEWS = 15;
   private static int numVendors;
   private static final double S_COST = 1000.00;
   private static final double FP_COST = 550.00;
   private static final double NP_COST = 300.00;
   
   
   
// Constructors //
   public Vendor(String id){
      this.setID(id);
      numVendors++;
   }
// Accessors //
   public String getID(){
      return this.id;
   }
   public String getName(){
      return this.name;
   }
   public String getType(){
      return this.type;
   }
   public double getCost(){
      return this.cost;
   }
   public static int getNumVendors(){
      return numVendors;
   }
   
// Mutators //
   public void setID(String id){
      if (id == null || id.equals(""))
         throw new IllegalArgumentException("ID can not be blank");
      if (id.length() != 4)
         throw new IllegalArgumentException("length must be 4 char long");
      if(!((id.substring(0,2)).equals("DC")))
            throw new IllegalArgumentException("Prefix should be DC");
      this.id = id;
   }
   
   public void setName(String name){
     if(name == null || name.equals(""))
        throw new IllegalArgumentException("Name can not be empty");
     this.name = name;  
   }
   public void setCost(double cost){
      if(cost <0)
         throw new IllegalArgumentException("Cost can not be negetive");
      this.cost = cost;
   }
   
// Special Purpose //
   
   public void sellTicket(){
      if(this.ticketSold < MAX_SEAT)
         ticketSold++;
   }
   
   public double moneyEarned(){
      return this.getTicketSold() * this.getCost();
   }
   
   public String toString(){
      return "ID:" + this.getID() 
      + " Name: " + this.getName()
      + " Ticket Price:$"+ this.getCost()
      + " Total Ticket Sold:"+ this.getTicketSold()
      + " Total Revenue:$"+ this.moneyEarned();
   }
   
}