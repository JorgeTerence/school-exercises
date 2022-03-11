/*
Embeded Systems - 17/02/2022

Install Arduino IDE [https://www.arduino.cc]
Install CH340 driver
Buy Arduino UNO and connect via USB to computer
Use TinkerCad for emulating circuits and as an online IDE
*/

int led = 13;
int time = 2000;

void setup()
{
  pinMode(led, OUTPUT);
}

void loop()
{
  digitalWrite (led, HIGH);
  delay (time);
  digitalWrite (led, LOW);
  delay (time * 2);
}
