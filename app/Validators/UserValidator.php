<?php
/**
 * Created by PhpStorm.
 * User: diogoazevedo
 * Date: 06/01/16
 * Time: 09:29
 */

namespace acessoSystem\Validators;


class UserValidator
{


  public function rules()
  {
    return [
        'name'                         => 'required|max:255|regex:/^[\pL\s\-]+$/u',
        'email'                        => 'required|email|max:255|unique:users',
        'cpf'                          => 'required|size:14|unique:users',
        'password'                     => 'required|confirmed|min:6',
        'identity'                     => 'required|regex:/^[0-9\-!,\'\"\/@\.:\(\)]+$/',
        'dispatcher'                   => 'required|max:20|regex:/^[\pL\s\-]+$/u',

        'birthdate'                    =>'required|date_format:"d-m-Y"',
        'phone'                        =>'required',
        'cel'                          =>'required',

        'gender'                       =>'required|max:1',
        'maritalstatus'                =>'required|max:30',
        'mother'                       =>'required|max:120|regex:/^[\pL\s\-]+$/u',
        'father'                       =>'required|max:120|regex:/^[\pL\s\-]+$/u',

        'nationality'                  =>'required|max:40',
        'naturality'                   =>'required|max:40',

        'children'                     =>'required|max:3',

        'zipcode'                      =>'required|size:10',
        'address'                      =>'required|max:255',
        'neighborhood'                 =>'required|max:50',
        'complement'                   =>'required|max:100',
        'city'                         =>'required|max:50',
        'state'                        =>'required|size:2',
    ];
  }
  public function messages()
  {

    return   [
      //required
        'name.required' => 'O campo NOME é obrigatório',
        'email.required' => 'O campo E-MAIL é obrigatório',
        'cpf.required' => 'O campo CPF  é obrigatório',
        'password.required' => 'O campo SENHA  é obrigatório',
        'identity.required' => 'O campo IDENTIDADE  é obrigatório',
        'dispatcher.required' => 'O campo ORGÃO EXPEDIDOR  é obrigatório',
        'birthdate.required' => 'O campo DATA DE NASCIMENTO  é obrigatório',
        'phone.required' => 'O campo TELEFONE  é obrigatório',
        'cel.required' => 'O campo CELULAR  é obrigatório',
        'gender.required' => 'O campo SEXO  é obrigatório',
        'maritalstatus.required' => 'O campo ESTADO CIVIL  é obrigatório',
        'mother.required' => 'O campo NOME DA MÃE  é obrigatório',
        'father.required' => 'O campo NOME DO PAI  é obrigatório',
        'nationality.required' => 'O campo NACIONALIDADE  é obrigatório',
        'naturality.required' => 'O campo NATURALIDADE  é obrigatório',
        'children.required' => 'O campo FILHOS  é obrigatório',
        'zipcode.required' => 'O campo CEP  é obrigatório',
        'address.required' => 'O campo LOGRADOURO  é obrigatório',
        'neighborhood.required' => 'O campo BAIRRO  é obrigatório',
        'complement.required' => 'O campo COMPLEMENTO  é obrigatório',
        'city.required' => 'O campo CIDADE  é obrigatório',
        'state.required' => 'O campo ESTADO  é obrigatório',


         //max
        'name.max' => 'NOME não deve ser maior que 255 DÍGITOS',
        'email.max' => 'E-MAIL não deve ser maior que 255 DÍGITOS',
        'password.max' =>  ' SENHA deve ser maior que 6 DÍGITOS',
        'cpf.size' => 'O campo CPF deve ter exatamente 14 DÍGITOS - ex 000.000.000-00',
        'dispatcher.max' => 'ORGÃO EXPEDIDOR não deve ser maior que 20 DÍGITOS (ex: SSP ou DETRAN)',
        'gender.max' => 'SEXO não deve ser maior que 1 DÍGITO - ex M ou F',
        'maritalstatus.max' => 'ESTADO CIVIL não deve ser maior que 30 DÍGITOS',
        'mother.max' => 'NOME DA MÃE não deve ser maior que 120 DÍGITOS',
        'father.max' => 'NOME DO PAI não deve ser maior que 120 DÍGITOS',
        'nationality.max' => 'NACIONALIDADE não deve ser maior que 40 DÍGITOS',
        'naturality.max' => 'NATURALIDADE não deve ser maior que 40 DÍGITOS',
        'children.max' => 'FILHOS não deve ser maior que 3 DÍGITOS',
        'zipcode.size' => 'O campo CEP deve ter exatamente 10 DÍGITOS - ex 00.000-000',
        'address.max' => 'LOGRADOURO não deve ser maior que 255 DÍGITOS',
        'neighborhood.max' => 'BAIRRO não deve ser maior que 50 DÍGITOS',
        'complement.max' => 'COMPLEMENTO não deve ser maior que 100 DÍGITOS',
        'city.max' => 'CIDADE não deve ser maior que 50 DÍGITOS',
        'state.size' => 'O campo ESTADO deve ter exatamente 2 DÍGITOS - ex RJ',




        'name.regex' => 'O campo NOME deve conter somente letras',
        'identity.regex' => 'O campo Identidade não pode conter letras (ex: 334.334.344-34 ou 99/333)',
        'dispatcher.regex' => 'O campo ORGÃO EXPEDIDOR deve conter somente letras',
        'mother.regex' => 'O campo MÃE deve conter somente letras',
        'father.regex' => 'O campo PAI deve conter somente letras',

    ];

  }

}