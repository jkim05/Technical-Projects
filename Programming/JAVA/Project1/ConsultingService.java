/*
//*********************************************************
/*
   Name: Jefferson T. Kim
   Date: 04/11/2022
   Course/Section: IT 206.2D1
   Assignment: Lab 9 
   
 * In this file, do the following things:
 * 1) Modify the class so that all ConsultingService objects must use the Sellable interface
 * 2) Create a constructor that takes in a consulting service name, consulting service cost per hour,
 *    and a consulting service number of hours
 * 3) Override the getCost() method and return the result of multiplying the consulting service cost per hour by
 *    the consulting service number of hours

 * 4) Modify the class so that it inherits from Product
 */
 
public class ConsultingService extends Product implements Sellable {
    private double costPerHour;
    private double numHours;

    public ConsultingService(String name, double costPerHour, double numHours) {
        super(name, costPerHour * numHours);
        if (name == null || name.equals("")) {
            throw new IllegalArgumentException("Enter a name");
        }
        if (costPerHour < 0) {
            throw new IllegalArgumentException("Enter a cost per hour above 0");
        }
        if (numHours < 0) {
            throw new IllegalArgumentException("Enter the number of hours above 0");
        }
        this.costPerHour = costPerHour;
        this.numHours = numHours;
    }

    public String getName() {
        return super.getTitle(); // Use the inherited title for the name
    }

    public double getCostPerHour() {
        return this.costPerHour;
    }

    public double getNumHours() {
        return this.numHours;
    }

    @Override
    public double getCost() {
        return super.getCost(); // The cost is already calculated in the superclass constructor
    }

    @Override
    public String toString() {
        return "Consulting Service: " + getName() + "\n"
                + "Cost Per Hour: " + String.format("$%.2f", getCostPerHour()) + "\n"
                + "Number of Hours: " + getNumHours() + " hours";
    }
}
//*********************************************************