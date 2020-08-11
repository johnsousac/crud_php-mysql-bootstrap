/*
 * 
 * 		Um funcionário recebe um salário fixo mais 4,0% de comissão sobre as vendas. Faça
 * 		um algoritmo que receba o salário fixo e o valor das vendas, calcule e mostre a comissão e o
 * 		salário final do funcionário.
 * 
 * */

package br.com.exercicios.estruturasequencial;

import java.util.Scanner;

public class Exercicio3 {
	public static void main(String[] args) {
		double salarioFixoFuncionario = 0.0;
		double totalVendas = 0.0;
		double salarioFinal = 0.0;
		
		Scanner sc = new Scanner(System.in);
		
		System.out.println("Informe o salario fixo do funcionario: ");
		salarioFixoFuncionario = sc.nextDouble();
		System.out.println("Informe o valor total das vendas realizadas: ");
		totalVendas = sc.nextDouble();
		
		salarioFinal = (totalVendas * 0.04) + salarioFixoFuncionario;
		
		System.out.println("Salario final do funcionario: " + salarioFinal);
		
		sc.close();
	}
}