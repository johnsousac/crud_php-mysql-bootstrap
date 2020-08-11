/*
 * Fa�a um algoritmo que leia dois n�meros, calcule e mostra a divis�o do primeiro
 * n�mero digitado pelo segundo. Lembre-se que n�o existe divis�o por zero.
 * 
 * */

package br.com.exercicios.estruturadecisao;

import java.util.Scanner;

public class Exercicio9 {
	public static void main(String[] args) {
		double num0 = 0.0;
		double num1 = 0.0;
		double div = 0.0;
		
		Scanner sc = new Scanner(System.in);
		
		System.out.println("Informe o primeiro numero: ");
		num0 = sc.nextDouble();
		System.out.println("Informe o segundo numero: ");
		num1 = sc.nextDouble();
		
		if(num1 == 0) {
			System.out.println("Impossivel realizar divis�o por zero!");
		} else {
			div = num0 / num1;
			System.out.println("Resultado da divis�o: " + div);
		}
		
		sc.close();
	}
}