/*
   Name: Jefferson T. Kim
   Date: 10/09/2021
   Course/Section: IT 206.DL2
   Assignment: Assignment 4 (Solution Implementation) 
  
   Description: 
   
   
   
   */


import javax.swing.JOptionPane;


public class CareerFairTour{
   static final int MAX_BUSES = 20;
   public static void main(String[] args){
     Bus[] tour = createBusTour();
     sellBusTicket(tour);
     printBusTour(tour);
   }
   public static void vendorCost(Bus[] tour){
      String BusID = JOptionPane.showInputDialog("Enter Bus Id to sell ticket: ");
      int index = -1;
      for(int i = 0; i< Vendor.getNumVendors();i++){
         if(vendor_ID.equals(tour[i].getID())){
            index = i;
            break;
         }
            
      }
      if(index >=0 )
         tour[index].sellTicket();
      
   }
   public static Bus[] createBusTour(){
      Bus[] tour = new Bus[MAX_BUSES];
      
      do{
         try{
         
            Bus aBus = new Bus(JOptionPane.showInputDialog("Enter Bus ID: "));
            
            //tour[Bus.getNumBuses()] = new Bus();
            String name = JOptionPane.showInputDialog("Enter Bus Name: ");
            aBus.setName(name);
            aBus.setCost(Double.parseDouble(JOptionPane.showInputDialog("Enter ticket cost: ")));
            tour[Bus.getNumBuses()-1]= aBus;
         
         }catch(NumberFormatException e){
            JOptionPane.showMessageDialog(null, "Ticket cost must be in numbers");  
         }
         catch(IllegalArgumentException e){
            JOptionPane.showMessageDialog(null, e.getMessage());      
         }
      }
      while(JOptionPane.showConfirmDialog(null, "Build Another tour ?") == JOptionPane.YES_OPTION);
      
      return tour;
   }
   
   public static void printBusTour(Bus[] tour){
      //totalRevenue = 0;
      String report = "";
      for(int i = 0; i< Bus.getNumBuses(); i++){
         report += "Bus[" + i + "]: " + tour[i].toString() + "\n";
      }
      JOptionPane.showMessageDialog(null, report);
   }
}