/*
 * Faça um algoritmo para ler dois números inteiros e um caractere. O caractere digitado
 * irá representar uma operação aritmética (+, -, *, /, mod) ou uma operação lógica com os
 * operadores relacionais (>, >=, <, <=, <>,=). De acordo com o operador digitado realize a
 * operação desejada.
 * 
 * */

package br.com.exercicios.estruturadecisao;

import java.util.Scanner;

public class Exercicio11 {
	public static void main(String[] args) {
		double num0 = 0.0;
		double num1 = 0.0;
		double operacao = 0.0;
		char carac = 'a';
		
		Scanner sc = new Scanner(System.in);
		
		System.out.println("Informe o primeiro numero: ");
		num0 = sc.nextDouble();
		System.out.println("Informe o segundo numero: ");
		num1 = sc.nextDouble();
		
		System.out.println("*--------------------------------------------*");
		System.out.println("|                    MENU                    |");
		System.out.println("*--------------------------------------------*");
		System.out.println("|1. Digite a para somar                      |");
		System.out.println("|2. Digite b para subtrair                   |");
		System.out.println("|3. Digite c para multiplicar                |");
		System.out.println("|4. Digite d para dividir                    |");
		System.out.println("*--------------------------------------------*");
		carac = sc.next().charAt(0);
		switch(carac) {
			case 'a':
				operacao = num0 + num1;
				System.out.println("Resultado: " + operacao);
				break;
		}
		
		
		sc.close();
	}
}