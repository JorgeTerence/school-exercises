import javax.swing.JOptionPane;
import java.util.scanner;

public class Divisibility {
	public static void main(String[] args) {
		Scanner scanner = new Scanner(System.in);

		System.out.print("Enter an integer: ");
		int num = scanner.nextInt();

		if (num % 3 == 0  &&  num % 7 != 0) {
			System.out.println(num + " is divisible by 3, but not 7");
		}	else if (num % 3 != 0  &&  num % 7 == 0) {
			System.out.println(num + " is divisible by 7, but not 3");
		}	else if (num % 3 == 0  &&  num % 7 == 0) {
			System.out.println(num + " is divisible by 3 and 7");
		}	else {
			System.out.println(num + " isn't divisible by 3 nor 7");
		}
	}
}
