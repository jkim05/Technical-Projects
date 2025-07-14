/**
   Name: Jefferson Kim
   Date: 04/02/2022
   Course/Section: IT 206-2D1
   Assignment: Assignment 6
  
   Description: This design is created using an object-oriented solution to add, 
   remove, and track the subtotal of items in a shopping cart. The cart must have 
   a subtotal of no greater than 1500.00 with a maximum of 50 items. Each item must
   contain name, price, and competitor prices (only created when a name and price
   has input. Warranty items follow similar functions as an item, but the duration
   of the warranty must be tracked (only created when name, price, and duration is
   provided). The duration will be stored in months (12, 24, or 36). The cost of
   the warranty is found by multiplying the duration by 4. 
   
*/

public class WarrentyItem extends Item {
   private int duration;
   private double wCost;
   
   public WarrentyItem(String name, double price, double aPrice, double tPrice, double wPrice, int duration, double wCost) {
      super(name, price, aPrice, tPrice, wPrice);
      if(duration < 12) {
         throw new IllegalArgumentException("please enter the warrenty duration");
      }
      this.duration = duration;
    }
    
    public int getDuration() { return this.duration; }
    
    public void setDuration(int duration) {
      if(duration == 12 || duration == 24 || duration == 36) {
         this.duration = duration;
      }
      else {
         throw new IllegalArgumentException("please enter the duration of the warrenty: 12, 24, or 36");
      }
    }
    
    public void calculateWarrenty(int duration, double price) {
      wCost = (price + (duration * 4));
      this.wCost = wCost;
      }
 }
    
    