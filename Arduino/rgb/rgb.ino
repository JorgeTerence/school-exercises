/*
An RGB LED has 4 legs and two possible configurations:

- Common anode: has one positive entry that connect to 5V. The others are
  negative and controll each of the RGB colors.

- Common catode: has one negative exit that connects to GND. The other three
  are positive and controll each of the RGB colors.

You can use a multimeter to easily test which leg is which

With digital ports, you can have 7 colors: red, green, blue, pink, yellow,
cyan and white. But with analog ports and specific electric signals you can
have millions of different colors.
*/

int blue = 5;
int green = 3;
int red = 7;

void setup() {
  pinMode(red, OUTPUT);
  pinMode(green, OUTPUT);
  pinMode(blue, OUTPUT);
}

// The RGB LED used in the simulation is common catode
void loop() {
  // Pink
  digitalWrite(blue, HIGH);
  digitalWrite(red, HIGH);

  delay(1000);

  // Yellow
  digitalWrite(blue, LOW);
  digitalWrite(green, HIGH);

  delay(1000);

  // Cyan
  digitalWrite(red, LOW);
  digitalWrite(blue, HIGH);

  delay(1000);
  digitalWrite(green, LOW);
}
