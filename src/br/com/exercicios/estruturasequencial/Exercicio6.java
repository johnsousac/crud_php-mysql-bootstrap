/*
 * Faça um algoritmo que leia o ano de nascimento de uma pessoa e o ano atual, calcule e
 * mostre:
 * a) A idade dessa pessoa em anos;
 * b) A idade dessa pessoa em meses;
 * c) A idade dessa pessoa em dias;
 * d) A idade dessa pessoa em semanas.
 * 
 * */

package br.com.exercicios.estruturasequencial;

import java.util.Scanner;

public class Exercicio6 {
	public static void main(String[] args) {
		int anoNascimento = 0;
		int anoAtual = 0;
		
		Scanner sc = new Scanner(System.in);
		
		System.out.println("Informe o ano de nascimento: ");
		anoNascimento = sc.nextInt();
		System.out.println("Informe o ano atual: ");
		anoAtual = sc.nextInt();
		
		System.out.println("Idade em anos: " + (anoAtual - anoNascimento)
				+ "\nIdade em meses: " + ((anoAtual - anoNascimento) * 12)
				+ "\nIdade em dias: " + ((anoAtual - anoNascimento) * 365)
				+ "\nIdade em semanas: " + (((anoAtual - anoNascimento) * 365) / 7));
		
		sc.close();
	}
}