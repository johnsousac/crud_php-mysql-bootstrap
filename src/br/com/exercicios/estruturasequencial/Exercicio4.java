/*
 * 		Faça um algoritmo que leia o peso de uma pessoa em quilo, calcule e mostre o peso em
 * 		gramas.
 * 
 * */

package br.com.exercicios.estruturasequencial;

import java.util.Scanner;

public class Exercicio4 {
	public static void main(String[] args) {
		double pesoEmQuilo = 0.0;
		double pesoEmGrama = 0.0;
		
		Scanner sc = new Scanner(System.in);
		
		System.out.println("Informe o peso da pessoa em quilo: ");
		pesoEmQuilo = sc.nextDouble();
		
		pesoEmGrama = pesoEmQuilo * 1000;
		
		System.out.println("Peso convertido em gramas: " + pesoEmGrama);
		
		sc.close();
	}
}
