/*
 *		Faça um algoritmo para ler três números inteiros e calcule a multiplicação entre eles
 */
package br.com.exercicios.estruturasequencial;

import java.util.Scanner;

public class Exercicio1 {
	public static void main(String[] args) {
		int num0 = 0;
		int num1 = 0;
		int num2 = 0;
		int multiplicacao = 0;
		
		Scanner sc = new Scanner(System.in);
		
		System.out.println("Informe o primeiro numero: ");
		num0 = sc.nextInt();
		System.out.println("Informe o segundo numero: ");
		num1 = sc.nextInt();
		System.out.println("Informe o terceiro numero: ");
		num2 = sc.nextInt();
		
		multiplicacao = (num0 * num1 * num2);
		
		System.out.println("Soma: " + multiplicacao);
		
		sc.close();
	}
}