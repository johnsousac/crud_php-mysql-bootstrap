/*
 * Faça um algoritmo que leia a temperatura em graus Celsius, calcule e mostre a
 * temperatura em graus Fahrenheit. Sabendo que: Fahrenheit = 1.8 * Celsius +32.
 * 
 * */

package br.com.exercicios.estruturasequencial;

import java.util.Scanner;

public class Exercicio8 {
	public static void main(String[] args) {
		double celsius = 0.0;
		double fahrenheit = 0.0;
		
		Scanner sc = new Scanner(System.in);
		
		System.out.println("Informe a temperatura em Celsius: ");
		celsius = sc.nextDouble();
		
		fahrenheit = 1.8 *  celsius + 32;
		
		System.out.println("Grau convertido em Fahrenheit: " + fahrenheit);
		
		sc.close();
	}
}