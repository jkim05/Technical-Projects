
/*
   Name: Jefferson T. Kim
   Date: 05/01/2022
   Course/Section: IT 206.2D1
   Assignment: 8 

   */
   
public class Candidate {
   private String name;
   private String email;
   private String street;
   private String city;
   private String state;
   private String zip;
   private String phone;
   private Candidate[] roster;
   public static final int MAX_CANDIDATES = 50;
   public static final int MAX_ZIP_CHARS = 5;
   public static final int MAX_PHONE_CHARS = 10;
   
   public Candidate() {
      this.roster = new Candidate[MAX_CANDIDATES];
   }
   
   public Candidate(String name, String email, String street, String city, String state,String zip, String phone) {
      if(name == null || name.equals("")) {
         throw new IllegalArgumentException("Please enter a name");
         }
      if(email == null || email.equals("")) {
         throw new IllegalArgumentException("Please enter an email");
         }
      if(street == null || street.equals("")) {
         throw new IllegalArgumentException("Please eneter a street");
         }
      if(city == null || city.equals("")) {
         throw new IllegalArgumentException("Please enter a city");
         }
      if(state == null || state.equals("")) {
         throw new IllegalArgumentException("Please enter a state");
         }
      if(zip == null || zip.equals("")) {
         throw new IllegalArgumentException("Please enter a company name");
         }
      if(phone == null || phone.equals("")) {
         throw new IllegalArgumentException("Please enter a phone number");
         }
         validateZip(zip);
         validatePhone(phone);
         this.name = name;
         this.email = email;
         this.city = city;
         this.state = state;
       }
     
     public String getName() { return this.name; }
     public String getEmail() { return this.email; }
     public String getStreet() { return this.street; }
     public String getCity() { return this.city; }
     public String getState() { return this.state; }
     public String getZip() { return this.zip; }
     public String getPhone() { return this.phone; }
     
     public void setName (String name) {
     if(name == null || name.equals("")) {
         throw new IllegalArgumentException("Please enter a name");
        }
      this.name = name;
     }
     
     public void  setEmail(String email) { 
      if(email == null || email.equals("")) {
         throw new IllegalArgumentException("Please enter an email");
         }
       this.email = email;
     }
     
     public void  setStreet(String street) { 
     if(street == null || street.equals("")) {
         throw new IllegalArgumentException("Please eneter a street");
         }
      this.street = street;
     }
     
     public void  setCity(String city) {
     if(city == null || city.equals("")) {
         throw new IllegalArgumentException("Please enter a city");
         }
      this.city = city;
     }
     
     public void  setState(String state) { 
     if(state == null || state.equals("")) {
         throw new IllegalArgumentException("Please enter a state");
         }
       this.state = state;
      }
     
     public void  setZip(String zip) {
      validateZip(zip);
      this.zip = zip;
     }

     
     public void  setPhone(String phone) { 
      validatePhone(phone);
      this.phone = phone;
      }
      
      private static void validateZip(String zip) {
         if(zip == null || zip.equals("")) {
            throw new IllegalArgumentException("Please enter a company name");
            }
          if(zip.length() != MAX_ZIP_CHARS) {
            throw new IllegalArgumentException("The zip code must be minimum 5 characters");
            }
          boolean validZip = true;
          int x= 0;
          
          while(validZip && x < zip.length()) {
            if(Character.isDigit(zip.charAt(x))) {
               ++x;
               }
               else {
                  throw new IllegalArgumentException("Zip code must only contain digits");
               }
           }
      }

      private static void validatePhone(String phone) {
         if(phone == null || phone.equals("")) {
            throw new IllegalArgumentException("Please enter a phone number");
            }
          if(phone.length() != MAX_PHONE_CHARS) {
            throw new IllegalArgumentException("A phone number has a minimum of 10 digits");
            }
          boolean validPhone = true;
          int z= 0;
          
          while(validPhone && z < phone.length()) {
            if(Character.isDigit(phone.charAt(z))) {
               ++z;
               }
               else {
                  throw new IllegalArgumentException("phone number must only contain digits");
               }
           }
      }
      
      public String toString() {
         return "Candidate\n"
         + "\nName: " + this.getName()
         + "\nEmail: " + this.getEmail()
         + "\nStreet: " + this.getStreet()
         + "\nCity: " + this.getCity()
         + "\nState: " + this.getState()
         + "\nZip: " + this.getZip()
         + "\nPhone: " +this.getPhone();
       }
}    
      