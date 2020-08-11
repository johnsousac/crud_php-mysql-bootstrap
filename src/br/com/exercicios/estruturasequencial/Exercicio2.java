/*
 * 		Faça um algoritmo que leia duas notas, calcule e mostre a média ponderada dessas 
 * 		notas, sabendo que os pesos devem ser dados pelo usuário.
 * */

package br.com.exercicios.estruturasequencial;

import java.util.Scanner;

public class Exercicio2 {
	public static void main(String[] args) {
		double nota0 = 0.0;
		double nota1 = 0.0;
		double peso0 = 0.0;
		double peso1 = 0.0;
		double mediaPonderadaNotas = 0.0;
		
		Scanner sc = new Scanner(System.in);
		
		System.out.println("Informe a primeira nota: ");
		nota0 = sc.nextDouble();
		System.out.println("Informe o peso da primeira nota: ");
		peso0 = sc.nextDouble();
		System.out.println("Informe a segunda nota: ");
		nota1 = sc.nextDouble();
		System.out.println("Informe o peso da segunda nota: ");
		peso1 = sc.nextDouble();
		
		mediaPonderadaNotas = (nota0 * peso0 + nota1 * peso1) / (peso0 + peso1);
		
		System.out.println("Media final: " + mediaPonderadaNotas);
		
		sc.close();
	}
}
