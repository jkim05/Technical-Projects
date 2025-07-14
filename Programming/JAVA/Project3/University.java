/*
   Name: Jefferson T. Kim
   Date: 09/26/2021
   Course/Section: IT 206.DL2
   Assignment: Assignment 2 (Solution Implementation) 
  
   Description: Course Registration for the department of Information Science and Technology 
   of the university is offering 3 (100-level) and 2 (200-level) courses in the Spring 2022. 
   
   
   */
import javax.swing.JOptionPane;

public class University{
   public static void main(String[] args){
      final int MAX_COURSE = 5;
      
      Course[] universityCourse = new Course[5];
      do {
         universityCourse[getNumCourse] = addCourse();
      }while(JOptioPane.showInputDialog("Y/N to enter a course").equalsIgnoreCase("y") || MAX_Course < 5);
    }
   
   public Course addCourse(){
      Course aCourse = new Course();
      
      try{
         aCourse.setCourseID(Integer.parseInt(JOptionPane.showInputDialog("Enter Course ID: " )));
         }catch (NumberFormatException e){
            JOptionPane.showMessageDialog(null, "Please enter a number");
         }
         catch(IllegalArgumentException e){
            JOptionPane.showMessageDialog(null, e.getMessage()); 
         }
       try{
         aCourse.setName(String.format(JOptionPane.showInputDialog("Enter Course Name: " )));
                  }
         catch(IllegalArgumentException e){
            JOptionPane.showMessageDialog(null, e.getMessage()); 
           } 
       try{
         aCourse.setCreditHours(Integer.parseInt(JOptionPane.showInputDialog("Enter Credit Hours: " )));
         }catch (NumberFormatException e){
            JOptionPane.showMessageDialog(null, "Please enter a number");
         }
         catch(IllegalArgumentException e){
            JOptionPane.showMessageDialog(null, e.getMessage()); 
         }   
       try{
         aCourse.setCurrentEnroll(Integer.parseInt(JOptionPane.showInputDialog("Enter Course Enrollment: " )));
         }catch (NumberFormatException e){
            JOptionPane.showMessageDialog(null, "Please enter a number");
         }
         catch(IllegalArgumentException e){
            JOptionPane.showMessageDialog(null, e.getMessage()); 
        }
        
        return aCourse;
       
       }
            
/*
   public static printCourse(Course [] universityCourse){
      for(int i = 0; i < getNumCourse();  i++){
         JOptionPane.showMessageDialog(universityCourse[i].toString());
         }
    }
 */ 
}