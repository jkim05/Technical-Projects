import javax.swing.JOptionPane;
public class implementation {
   public static void main (String[] args) {
   Advisor advisor1 = new Advisor("Adam Laty", "Information Technology");
   Student student1 = new Student("Jefferson Kim");
   University university1 = new University("George Mason University", advisor1, student1);
   
   JOptionPane.showMessageDialog(null, university1.toString());


   }
}