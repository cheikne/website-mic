<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/Accueil">LOGO </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Nom')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Mot de Passe')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirmer Mot de Passe')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <!-- Profil de user -->
            <div class="mt-4" style="display:flex;">
                <div>
                  <x-label for="profil" :value="__('Profil d\'utilisateur')" />
                  <select class="form-control" id="sel1">
                    <option selected disabled>choix</option>
                    <option value="doctorant">doctorant</option>
                    <option value="encandrant">encandrant</option>
                    <option value="admin">admin</option>
                  </select>
               </div>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <div>
                  <x-label for="institut" :value="__('Institut de l\'utilisateur')" />
                  <select class="form-control" id="sel2">
                    <option selected disabled>choix</option>
                    <option value="Managem">Managem</option>
                    <option value="Mascir">Mascir</option>
                    <option value="ENIM">ENIM</option>
                    <option value="UCA">UCA</option>
                    <option value="CNRST">CNRST</option>
                    <option value="ENSIAS">ENSIAS</option>
                  </select>
              </div>
            </div>
            <div class="mt-4">
                <x-label for="institut" :value="__('Realisations de l\'utilisateur')" />
                <div class="mt-4" style="display:flex;">
                    <div class="form-check-inline">
                      <label class="form-check-label" for="check1">
                        <input type="checkbox" class="form-check-input realisat" value="1">R1
                      </label>
                    </div>
                     &nbsp;&nbsp;<div class="form-check-inline">
                      <label class="form-check-label" for="check2">
                        <input type="checkbox" class="form-check-input realisat" value="2">R2
                      </label>
                    </div>
                    &nbsp;&nbsp;<div class="form-check-inline">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input realisat" value="3">R3
                      </label>
                    </div>
                   &nbsp;&nbsp;<div class="form-check-inline">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input realisat" value="4">R4
                      </label>
                    </div>
                    &nbsp;&nbsp;<div class="form-check-inline">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input realisat" value="5">R5
                      </label>
                    </div>
                    &nbsp;&nbsp;<div class="form-check-inline">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input realisat" value="6">R6
                      </label>
                    </div>
                    &nbsp;&nbsp;<div class="form-check-inline">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input realisat" value="7">R7
                      </label>
                    </div>
                </div>
            </div>
             <div class="mt-4" style="display:none;">
                <x-label for="profil" :value="__('Profil d\'utilisateur')" />

                <x-input id="profil" class="block mt-1 w-full"
                                type="text"
                                name="profil" />
            </div>
            <!-- Institut user -->
             <div class="mt-4" style="display:none;">
                <x-label for="institut" :value="__('Institut de l\'utilisateur')" />

                <x-input id="institut" class="block mt-1 w-full"
                                type="text"
                                name="institut" />
            </div>
            <!-- <Les Realisations  -->
             <div class="mt-4" style="display:none;">
                <x-label for="profil" :value="__('Realisations')" />

                <x-input id="these" class="block mt-1 w-full"
                                type="text"
                            name="these" />
            </div>
            <!-- Autoriation -->
             <div class="mt-4">
                <x-label for="autorisation" :value="__('Autoriation')" />

                <x-input id="autorisation" class="block mt-1 w-full"
                                type="text"
                                name="autorisation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Dejà enregistré?') }}
                </a>

                <x-button class="ml-4" onclick="ProfilUser()">
                    {{ __('Enregistrer') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
<script type="text/javascript">
    function ProfilUser(){
        var choix="";
        var selectProfif = document.getElementById('sel1');
        var valueProfil = selectProfif.options[selectProfif.selectedIndex].value;
        var selectInstitut = document.getElementById('sel2');
        var valueInstitut = selectInstitut.options[selectInstitut.selectedIndex].value;
        document.getElementById('profil').value = valueProfil;
        document.getElementById('institut').value = valueInstitut;
        var checkboxes = document.getElementsByClassName("realisat");
        var i=0;
        for (i=0; i<checkboxes.length;i++) {
            if(choix=="" && checkboxes[i].checked ==true)
                choix = checkboxes[i].value;
            else if(checkboxes[i].checked==true) { 
                choix = choix+","+checkboxes[i].value; 
            }
        }
        document.getElementById('these').value = choix;
    }
</script>