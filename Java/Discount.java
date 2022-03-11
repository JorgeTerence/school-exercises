import javax.swing.JOptionPane;

public class Discount {

	public static void main(String[] args) {

		int day = Integer.parseInt(JOptionPane.showInputDialog(
				null,
				"Day of the week:" +
				"\n 1 = Monday" +
				"\n 2 = Tuesday" +
				"\n 3 = Wednesday" +
				"\n 4 = Thursday" +
				"\n 5 = Friday" +
				"\n 6 = Saturday or Sunday"
		));

		if (day < 1 || day > 6) {
			JOptionPane.showMessageDialog(null, "Invalid value!");
			return;
		}

		float value = Float.parseFloat(JOptionPane.showInputDialog(null, "Car cost:"));

		float discount = 1f - ((day + 1f) / 100f);

		JOptionPane.showMessageDialog(null, "Value after discount:" + value * discount);
	}
}
