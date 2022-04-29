/*
Ultrasonic.h is a arduino library for controlling ultrasonic speakers

This program uses the speakers capacity to listen to ultrasonic waves to measure
distance to close objects and fire an alarm if something approaches 20cm
*/ 

#include <Ultrasonic.h>
 
#define TRIGGER 2
#define ECHO 4
#define BUZZER 7

Ultrasonic ultrasonic(TRIGGER, ECHO);
 
void setup() {
  pinMode(BUZZER, OUTPUT);
  Serial.begin(9600);
}
 
void loop() {
  long time = ultrasonic.timing();
  float distance = ultrasonic.convert(time, Ultrasonic::CM);
  
  if (distance < 20) digitalWrite (BUZZER, HIGH);
  else digitalWrite (BUZZER, LOW);

  Serial.print("Distance [cm]: ");
  Serial.println(distance);
  delay(500);
}
