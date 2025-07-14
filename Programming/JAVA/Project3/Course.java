/*
   Name: Jefferson T. Kim
   Date: 09/26/2021
   Course/Section: IT 206.DL2
   Assignment: Assignment 2 (Solution Implementation) 
  
   Description: Course Registration for the department of Information Science and Technology 
   of the university is offering 3 (100-level) and 2 (200-level) courses in the Spring 2022. 
   
   
   
   */
import javax.swing.JOptionPane;

public class Course{
   private int courseID;
   private int courseHours;
   private String name;
   private int currentEnroll;
   private int availableSeats = currentEnroll - MAX_Enroll;
   private int totalEnroll = currentEnroll++;
   private int courseTotal;
   private static int numCourse;
   public static final int MAX_COURSE = 200;
   public static final int MIN_COURSE = 100;
   public static final int MAX_CreditHours = 4;
   public static final int MIN_CreditHours = 1;
   public static final int MAX_Enroll = 30;
   public static final int MIN_Enroll = 1;
   public static final int MAX_Courses = 5;
 
   
   //Constructor//
   public Course(){
      numCourse++;
      }
      public Course(int courseID, int courseHours, String name, int currentEnroll){
         this();
         if(courseTotal > MAX_Courses)
            this.courseTotal = courseTotal;
            else
               throw new IllegalArgumentException("Maxiumum number of courses inputted");
         if(courseID > MIN_COURSE && courseID < MAX_COURSE)
            this.courseID = courseID;
            else
               throw new IllegalArgumentException("Course ID must be between " + MIN_COURSE + " and " + MAX_COURSE);
         if(courseHours > MIN_CreditHours && courseHours < MAX_CreditHours)
            this.courseHours = courseHours;
            else
               throw new IllegalArgumentException("Course Hours must be between " + MIN_CreditHours + " and " + MAX_CreditHours);
         if(name.equals(""))
            this.name = name;
            else 
               throw new IllegalArgumentException("A name must be entered");        
         if(currentEnroll > MIN_Enroll && currentEnroll < MAX_Enroll)
            this.currentEnroll = currentEnroll;
            else
               throw new IllegalArgumentException("Enrollment must be between " + MIN_Enroll + " and " + MAX_Enroll);
            }
   //Accessors//
   public int getCourseID(){
      return this.courseID;
      }
      
   public String getName(){
      return this.name;
      }
      
   public int getCourseHours(){
      return this.courseHours;
      }
      
   public int getCurrentEnroll(){
      return this.currentEnroll;        
      }
      
   //Mutators//
   public void setCourseID(int courseID){
      if(courseID > MIN_COURSE && courseID < MAX_COURSE)
            this.courseID = courseID;
            else
               throw new IllegalArgumentException("Course ID must be between " + MIN_COURSE + " and " + MAX_COURSE);
            }
   public void setName(String name){
      if(name.equals(""))
            this.name = name;
            else 
               throw new IllegalArgumentException("A name must be entered");
            }
   public void setCourseHours(){
      if(courseHours > MIN_CreditHours && courseHours < MAX_CreditHours)
            this.courseHours = courseHours;
            else
               throw new IllegalArgumentException("Course Hours must be between " + MIN_CreditHours + " and " + MAX_CreditHours);
            }
   public void setCurrentEnroll(){
       if(currentEnroll > MIN_Enroll && currentEnroll < MAX_Enroll)
            this.currentEnroll = currentEnroll;
            else
               throw new IllegalArgumentException("Enrollment must be between " + MIN_Enroll + " and " + MAX_Enroll);
            }
   
   //Special Purpose Methods//
   public double cost(){
      return this.getCourseHours() * 679.00;
      }
   public double calculateAverageEnrollment(){
      return this.totalEnroll / numCourse;
      }
   public int calculateLargestEnrollment(){
      for(int i =0; i < MAX_Enroll; i++){
         if (currentEnroll == MAX_Enroll){
            int largest = currentEnroll;
            } 
      }
      return this.courseID;
    }
      
   public String toString() {
   return "Course Details:"
         + "\nCourse ID: " + this.getCourseID()
         + "\nName : " + this.getName()
         + "\nCredit Hours: " + this.getCourseHours()
         + "\nCurrent Enrollment: " + this.getCurrentEnroll()
         + "\nSeats Available: " + this.availableSeats
         + "\nTotal Cost: " + this.cost()
         + "\nTotal Number of Courses: " + this.numCourse
         + "\nTotal Enrollment : " + this.totalEnroll
         + "\nAverage Enrollment: " + this.calculateAverageEnrollment();
      }
 }