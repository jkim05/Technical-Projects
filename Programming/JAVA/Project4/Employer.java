
/*
   Name: Jefferson T. Kim
   Date: 05/01/2022
   Course/Section: IT 206.2D1
   Assignment: 8 

   */

public class Employer {
   private String company;
   private String phone;
   private int duration;
   
   public Employer(String company, String phone, int duration) {
      if(company == null || company.equals("")) {
         throw new IllegalArgumentException("Please enter a company name");
         }
      if(phone == null || phone.equals("")) {
         throw new IllegalArgumentException("Please enter a phone number");
         }
      if(duration < 0) {
         throw new IllegalArgumentException("Duration of employment must be above 0");
         }
      this.company = company;
      this.phone = phone;
      this.duration = duration;
    }
    
    public Employer(Employer employer) {
      this.company = getCompany();
      this.phone = getPhone();
      this.duration = getDuration();
    }
    
    public String getCompany() { return this.company; }
    public String getPhone() { return this.phone; }
    public int getDuration() { return this.duration; }
    
    public void setCompany (String company) {
      if(company == null || company.equals("")) {
         throw new IllegalArgumentException("Please enter a company name");
         }
       this.company = company;
     }
     
     public void setPhone (String phone) {
      if(phone == null || phone.equals("")) {
         throw new IllegalArgumentException("Please enter a phone number");
         }
      this.phone = phone;
      }
      
      public void setDuration (int duration) {
         if(duration < 0 || duration == 0) {
         throw new IllegalArgumentException("Duration of employment must be above 0");
         }
       this.duration = duration;
       }
       
       public String toString() {
         return "Employer Name: " + this.getCompany()
               + "\n Years Employed: " + this.getDuration();
       }
 }
