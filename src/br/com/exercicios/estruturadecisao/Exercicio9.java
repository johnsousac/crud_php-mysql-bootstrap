/*
 * Faça um algoritmo que leia dois números, calcule e mostra a divisão do primeiro
 * número digitado pelo segundo. Lembre-se que não existe divisão por zero.
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
			System.out.println("Impossivel realizar divisão por zero!");
		} else {
			div = num0 / num1;
			System.out.println("Resultado da divisão: " + div);
		}
		
		sc.close();
	}
}