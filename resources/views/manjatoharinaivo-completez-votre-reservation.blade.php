@extends('layouts.app')

@section('title', 'Réservation')

@section('content')
<div class="bg-[#F2F3F5]">
        <!-- Contents specific to this page -->
        <div class="py-[65px]">
            <div class="container mx-auto">
                <h2>Complétez votre réservation</h2>

                <div class="grid grid-cols-3 gap-[73px] pt-[58px]">
                    <div class="card card-gray">
                        <div class="card-header">
                            <h3 class="text-[28px] font-bold leading-[34px] mb-[6px]">Basic</h3>
                            <p class="font-normal text-[20px] leading-[24px]">Votre test psychotechnique simple</p>
                        </div>
                        <div class="pt-[52px]">
                            <!-- Price and selection -->
                            <div class="text-center px-[26px] pb-[32px] border-b border-solid border-[#F2F3F5]">
                                <div class="font-bold text-[#2C2C2C]  flex items-center justify-center">
                                    <span class="mr-[18px] text-[43px] leading-[51px]">+</span>
                                    <span class="text-[61px] leading-[73px]">0€</span>
                                </div>
                                <div class="h-[19px] mb-[12px]"></div>
                                <button class="card-btn">
                                    <div class="selection-circle">
                                        <i class="fas fa-check check-icon"></i>
                                    </div>
                                    <span>Sélectionner</span>
                                </button>
                            </div>
                            <!-- Listing -->
                            <div class="py-[32px] px-[26px]">
                            <ul>
                                <li class="mb-[26px]">
                                    <!-- Or possibly fa-hand-point-up -->
                                    <i class="far fa-hand-pointer"></i>
                                    <span>Entraînement illimité et gratuit</span>
                                </li>
                                <li class="mb-[26px]">
                                    <i class="far fa-circle-check"></i>
                                    <span>Annulation jusqu'à 48 heures</span>
                                </li>
                                <li class="mb-[26px]">
                                    <i class="far fa-file-lines"></i>
                                    <span>Recevez votre test le jour j</span>
                                </li>
                            </ul>
                                    </div>
                                    </div>
                                    </div>
                                    

                    <div class="card card-green card-selected">
                                    <div class="card-header">
                                    <h3 class="text-[28px] font-bold leading-[34px] mb-[6px]">Assurance</h3>
                                    <p class="font-normal text-[20px] leading-[24px]">Votre test psychotechnique sans stress</p>
                                    </div>
                                    <div class="pt-[52px]">
                                    <!-- Price and selection -->
                                    <div class="text-center px-[26px] pb-[32px] border-b border-solid border-[#F2F3F5]">
                                    <div class="font-bold text-[#2C2C2C] flex items-center justify-center">
                                    <span class="mr-[18px] text-[43px] leading-[51px]">+</span>
                                    <span class="text-[61px] leading-[73px]">40€</span>
                                    </div>
                                    <p class="text-[16px] leading-[19px] mb-[12px]">A peine le prix d'un resto</p>
                                <button class="card-btn">
                                    <div class="selection-circle">
                                        <i class="fas fa-check check-icon"></i>
                                    </div>
                                    <span>Sélectionner</span>
                                </button>
                            </div>
                            <!-- Listing -->
                            <div class="py-[32px] px-[26px]">
                                <ul>
                                    <li class="mb-[26px]">
                                        <!-- Or possibly fa-hand-point-up -->
                                        <i class="far fa-hand-pointer"></i>
                                        <span>Entraînement illimité et gratuit</span>
                                    </li>
                                    <li class="mb-[26px]">
                                        <i class="far fa-circle-check"></i>
                                        <span>Annulation jusqu'à 48 heures</span>
                                    </li>
                                    <li class="mb-[26px]">
                                        <i class="fas fa-arrow-rotate-right"></i>
                                        <span><strong>Repassez votre test pour 0€ (si test échoué)</strong></span>
                                    </li>
                                    <li class="mb-[26px]">
                                        <i class="far fa-file-lines"></i>
                                        <span>Recevez votre test le jour j</span>
                                    </li>
                                    <li class="mb-[26px]">
                                        <i class="far fa-file"></i>
                                        <span>Livret de préparation au test psychotechnique</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card card-blue">
                        <div class="card-header">
                            <h3 class="text-[28px] font-bold leading-[34px] mb-[6px]">Complet</h3>
                            <p class="font-normal text-[20px] leading-[24px]">Votre test psychotechnique tout compris</p>
                        </div>
                        <div class="pt-[52px]">
                            <!-- Price and selection -->
                            <div class="text-center px-[26px] pb-[32px] border-b border-solid border-[#F2F3F5]">
                                <div class="font-bold text-[#2C2C2C] flex items-center justify-center">
                                    <span class="mr-[18px] text-[43px] leading-[51px]">+</span>
                                    <span class="text-[61px] leading-[73px]">60€</span>
                                </div>
                                <p class="text-[16px] leading-[19px] mb-[12px]">A peine le prix de 4 pizzas</p>
                                <button class="card-btn">
                                    <div class="selection-circle">
                                        <i class="fas fa-check check-icon"></i>
                                    </div>
                                    <span>Sélectionner</span>
                                </button>
                            </div>
                            <!-- Listing -->
                            <div class="py-[32px] px-[26px]">
                                <ul>
                                    <li class="mb-[26px]">
                                        <!-- Or possibly fa-hand-point-up -->
                                        <i class="far fa-hand-pointer"></i>
                                        <span>Entraînement illimité et gratuit</span>
                                    </li>
                                    <li class="mb-[26px]">
                                        <i class="far fa-circle-check"></i>
                                        <span><strong>Annulation jusqu'à 48 heures</strong></span>
                                    </li>
                                    <li class="mb-[26px]">
                                        <i class="fas fa-arrow-rotate-right"></i>
                                        <span><strong>Repassez votre test pour 0€ (si test échoué)</strong></span>
                                    </li>
                                    <li class="mb-[26px]">
                                        <i class="far fa-file-lines"></i>
                                        <span>Recevez votre test le jour j</span>
                                    </li>
                                    <li class="mb-[26px]">
                                        <i class="far fa-file"></i>
                                        <span>Livret de préparation au test psychotechnique</span>
                                    </li>
                                    <li class="mb-[26px]">
                                        <i class="fas fa-download"></i>
                                        <span>Téléchargez vos résultats en illimité</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sticky footer banner -->
        <div class="bg-[#353535] py-[45px]">
            <div class="container mx-auto">
                <div class="flex justify-between items-center">
                    <!-- RDV card in the left -->
                    <div class="bg-[#F2F3F5] rounded-[20px] px-[30px] py-[25px] border border-solid border-[rgba(112,112,112,0.25)] flex justify-center items-center gap-[23px]">
                    <div class="text-[#BF2A6B] text-[29px]">
                        <i class="far fa-calendar-check"></i>
                    </div>
                    <div class="text-[#36578A]">
                        <p><strong>Test psychotechnique le 28 mars à 14:00</strong></p>
                        <p><small>15 rue de la république Montgeron 91230</small></p>
                    </div>
                    </div>

                    <!-- Total and button in the right -->
                    <div>
                    <div class="text-white mb-[24px] flex items-baseline justify-between">
                        <span class="text-[25px] font-normal">Total</span>
                        <span class="text-[61px]">135€</span>
                    </div>
                    <button class="bg-[#BF2A6B] text-white rounded-[12px] font-bold text-[26px] px-[65px] py-[8px] flex items-center justify-center gap-[23px]">
                        <span>Suivant</span>
                        <i class="fas fa-arrow-right"></i>
                    </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
