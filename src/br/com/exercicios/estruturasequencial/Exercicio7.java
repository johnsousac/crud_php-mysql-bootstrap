/*
 * Faça um algoritmo que leia o valor dos catetos de um triangulo, calcule e mostre a
 * hipotenusa.
 * 
 * */

package br.com.exercicios.estruturasequencial;

import java.util.Scanner;

public class Exercicio7 {
	public static void main(String[] args) {
		double catetoOposto = 0.0;
		double catetoAdjacente = 0.0;
		double hipotenusa = 0.0;
		
		Scanner sc = new Scanner(System.in);
		
		System.out.println("Informe o cateto oposto: ");
		catetoOposto = sc.nextDouble();
		System.out.println("Informe o cateto adjacente: ");
		catetoAdjacente = sc.nextDouble();
		
		hipotenusa = ((catetoOposto * catetoOposto) + (catetoAdjacente * catetoAdjacente));
		
		System.out.println("Comprimento da hipotenusa: " + Math.sqrt(hipotenusa));
		
		sc.close();
	}
}
