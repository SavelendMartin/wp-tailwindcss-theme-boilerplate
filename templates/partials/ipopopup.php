<!-- This example requires Tailwind CSS v2.0+ -->
<div class="fixed z-30 inset-0 overflow-y-auto" aria-labelledby="modal-title" id="modal" role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <!--
      Background overlay, show/hide based on modal state.

      Entering: "ease-out duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100"
        To: "opacity-0"
    -->
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity backdrop-filter backdrop-blur-md" aria-hidden="true"></div>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <!--
      Modal panel, show/hide based on modal state.

      Entering: "ease-out duration-300"
        From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        To: "opacity-100 translate-y-0 sm:scale-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100 translate-y-0 sm:scale-100"
        To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    -->
        <div id="popup1" class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-xl sm:w-full">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                        <!-- Heroicon name: outline/exclamation -->
                        <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                    </div>
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                            Disclaimer
                        </h3>
                        <div class="mt-2">
                            <p class="text-sm text-gray-700 mb-8">
                                Informationen på denna del av SaveLend Groups webbplats är begränsad och får inte, direkt eller indirekt, helt eller delvis, offentliggöras, publiceras eller distribueras inom eller till USA, Australien, Hongkong, Japan, Kanada, Nya Zeeland, Singapore, Sydafrika eller någon annan jurisdiktion där sådant offentliggörande, publicering eller distribution skulle vara olaglig eller kräva ytterligare registrering eller andra åtgärder än vad som krävs enligt svensk lag.
                            </p>

                            <label class="font-bold mb-2 uppercase">Ange det land du är bosatt i:</label>
                            <select id="country1" class="block w-full py-2 px-3 border border-gray-300 mb-8">
                                <option value="sweden">Sverige</option>
                                <option value="">USA</option>
                                <option value="">Australien </option>
                                <option value="">Hongkong</option>
                                <option value="">Japan </option>
                                <option value="">Kanada</option>
                                <option value="">Nya Zeeland </option>
                                <option value="">Singapore</option>
                                <option value="">Sydafrika</option>
                                <option value="other">Övriga länder</option>
                            </select>

                            <label class="font-bold mb-2 uppercase">Ange det land du befinner dig i:</label>
                            <select id="country2" class="block w-full py-2 px-3 border border-gray-300 mb-8">
                                <option value="sweden">Sverige</option>
                                <option value="">USA</option>
                                <option value="">Australien </option>
                                <option value="">Hongkong</option>
                                <option value="">Japan </option>
                                <option value="">Kanada</option>
                                <option value="">Nya Zeeland </option>
                                <option value="">Singapore</option>
                                <option value="">Sydafrika</option>
                                <option value="other">Övriga länder</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button id="continue" type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-challenger text-base font-medium text-white hover:bg-challenger-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-challenger sm:ml-3 sm:w-auto sm:text-sm">
                    Fortsätt
                </button>
                <a href="/" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                    Tillbaka
                </a>
            </div>
        </div>

        <div id="popup2" class="hidden inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-xl sm:w-full">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                        <!-- Heroicon name: outline/exclamation -->
                        <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                    </div>
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                            Viktig information
                        </h3>
                        <div class="mt-2">
                            <p class="text-sm text-gray-700 mb-4">På grund av legala restriktioner är informationen på den här delen av webbplatsen inte avsedd eller tillgänglig för vissa personer. Vi ber dig därför att ta del av följande information och lämna följande bekräftelse varje gång du önskar tillgång till den här delen av webbplatsen. Vänligen notera att villkoren nedan kan komma att ändras eller uppdateras och att det därför är viktigt att du läser dem varje gång du besöker denna webbplats.</p>

                            <p class="text-sm text-gray-700 mb-4">Informationen på denna del av SaveLend Groups webbplats är inte avsedd för, och får inte, direkt eller indirekt, helt eller delvis, åtkommas av eller distribueras eller spridas till personer som bor eller befinner sig i USA (innefattande dess territorier och provinser, varje stat i USA samt District of Columbia, ”USA”), Australien, Hongkong, Japan, Kanada, Nya Zeeland, Singapore, Sydafrika eller någon annan jurisdiktion där sådan åtgärd kan utgöra brott mot lokala värdepapperslagar eller bestämmelser, och utgör inte ett erbjudande att sälja, eller ett erbjudande att köpa eller förvärva, värdepapper i USA, Australien, Hongkong, Japan, Kanada, Nya Zeeland, Singapore, Sydafrika eller någon annan jurisdiktion där sådan åtgärd kan utgöra brott mot lokala värdepapperslagar eller bestämmelser i sådan jurisdiktion.</p>

                            <p class="text-sm text-gray-700 mb-4">Aktier utgivna av SaveLend Group som omnämns på denna webbplats (”Värdepapperna”) har inte registrerats och kommer inte att registreras enligt den vid var tid gällande U.S. Securities Act från 1933 (”Securities Act”) eller någon annan delstatlig värdepappersmyndighet och erbjuds eller säljs inte i USA om inte ett undantag från eller en transaktion som inte omfattas av registreringsskyldigheten i Securities Act är tillämpligt och i överenstämmelse med samtliga tillämpliga värdepapperslagar i varje delstat eller annan jurisdiktion i USA. Värdepapperna har vidare inte registrerats och kommer inte att registreras enligt någon tillämplig värdepapperslagstiftning i USA, Australien, Hongkong, Japan, Kanada, Nya Zeeland, Singapore eller Sydafrika och får, med vissa undantag, inte erbjudas eller säljas till eller inom, eller för en persons räkning eller till förmån för en person som är folkbokförd, befinner sig eller är bosatt i USA, Australien, Hongkong, Japan, Kanada, Nya Zeeland, Singapore eller Sydafrika. Det kommer inte lämnas något erbjudande till allmänheten i USA, Australien, Hongkong, Japan, Kanada, Nya Zeeland, Singapore eller Sydafrika att förvärva Värdepapperna.</p>

                            <p class="text-sm text-gray-700 mb-4">I varje medlemsstat inom det Europeiska ekonomiska samarbetsområdet, EES, (var och en benämnd "Medlemsstat") (med undantag för Sverige) riktas materialet som du önskar tillgång till endast till kvalificerade investerare i enlighet med Europarlamentets och rådets förordning (EU) 2017/1129 av den 14 juni 2017 ("Prospektförordningen") ("Kvalificerade Investerare"). I varje Medlemsstat är materialet som du önskar tillgång till endast riktat till Kvalificerade Investerare och personer som inte är Kvalificerade Investerare ska inte agera utifrån eller förlita sig på detta. En investering eller en investeringsåtgärd som detta material avser är enbart tillgänglig i en Medlemsstat för Kvalificerade Investerare och kommer endast att genomföras med sådana personer.</p>

                            <p class="text-sm text-gray-700 mb-4">Materialet på denna del av webbplatsen får endast distribueras till, och är endast avsedd för, personer i Storbritannien som är "kvalificerade investerare" i enlighet med Prospektförordningen såsom den införlivas i nationell rätt i Storbritannien genom the European Union (Withdrawal) Act 2018, och som är: (i) professionella investerare som omfattas av artikel 19(5) i Financial Services and Markets Act 2000 (Financial Promotion) Order 2005 i dess nuvarande lydelse ("Ordern"); (ii) omfattas av artikel 49(2)(a) – (d) i Ordern; eller (iii) andra personer som lagligen kan ta del av informationen (samtliga sådana personer benämns tillsammans som "Relevanta Personer"). I Storbritannien är materialet som du önskar tillgång till endast riktat till Relevanta Personer och personer som inte är Relevanta Personer ska inte agera utifrån eller förlita sig på detta. En investering eller en investeringsåtgärd som detta material avser är enbart tillgänglig i Storbritannien för Relevanta Personer och kommer endast att genomföras med sådana personer. Åtkomst till informationen och dokumenten på följande webbsidor kan vara olaglig i vissa jurisdiktioner, och endast vissa kategorier av personer kan tillåtas åtkomst till sådan information och sådana dokument. Samtliga personer bosatta utanför Sverige som önskar åtkomst till dokumenten på denna webbplats måste först försäkra sig om att de inte är föremål för lokala lagar eller bestämmelser som förbjuder eller inskränker deras rätt till åtkomst av denna webbplats, eller kräver registrering eller godkännande av något förvärv av Värdepapper av dem. Sådan registrering eller sådant godkännande har inte inhämtats utanför Sverige. SaveLend Group tar inget ansvar för någon persons brott mot tillämpliga lagar och bestämmelser.</p>

                            <p class="text-sm text-gray-700 mb-2"><strong class="font-bold">Jag intygar därför att:</strong></p>
                            <ol class="list-decimal mb-6">
                                <li>Jag är bosatt och befinner mig utanför USA, Australien, Hongkong, Japan, Kanada, Nya Zeeland, Singapore, Sydafrika och någon annan jurisdiktion där offentliggörande och distribution, direkt eller indirekt, helt eller delvis, av informationen på denna del av webbplatsen skulle vara olaglig eller kräva ytterligare registrering eller andra åtgärder än vad som krävs enligt svensk lag, och</li>
                                <li>Jag är bosatt och befinner mig (a) i Sverige eller (b) utanför Sverige och varje jurisdiktion som omnämns under punkten (1) ovan och, under sådana omständigheter, är jag behörig att ta del av informationen och dokumenten på denna webbplats utan begränsning enligt lag och utan att ytterligare åtgärder behöver vidtas av SaveLend Group.</li>
                            </ol>
                        </div>
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="acceptCheck" name="acceptCheck" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="acceptCheck" class="font-medium text-gray-900 font-bold">Jag har läst, förstått och samtycker till att följa samtliga restriktioner som framgår ovan.</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button id="accept" type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-challenger text-base font-medium text-white hover:bg-challenger-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-challenger sm:ml-3 sm:w-auto sm:text-sm">
                    Acceptera
                </button>
                <a href="/" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                    Tillbaka
                </a>
            </div>
        </div>

        <div id="popup3" class="hidden inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-xl sm:w-full">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                        <!-- Heroicon name: outline/exclamation -->
                        <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                    </div>
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                            Tyvärr
                        </h3>
                        <div class="mt-2">
                            <p class="mb-4">Informationen på denna del av SaveLend Groups webbplats är begränsad och får inte, direkt eller indirekt, helt eller delvis, offentliggöras, publiceras eller distribueras inom eller till USA, Australien, Hongkong, Japan, Kanada, Nya Zeeland, Singapore eller Sydafrika. Vi beklagar den olägenhet detta kan medföra.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:justify-center">
                <a href="/" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                    Tillbaka
                </a>
            </div>
        </div>
    </div>
</div>

<script>
function getCookie(name) {
    var v = document.cookie.match('(^|;) ?' + name + '=([^;]*)(;|$)');
    return v ? v[2] : null;
}

function setCookie(name, value, days) {
    var d = new Date;
    d.setTime(d.getTime() + 24*60*60*1000*days);
    document.cookie = name + "=" + value + ";path=/;expires=" + d.toGMTString();
}

var modal = document.getElementById('modal');
var popup1 = document.getElementById('popup1');
var popup2 = document.getElementById('popup2');
var popup3 = document.getElementById('popup3');

var country1 = document.getElementById('country1');
var country2 = document.getElementById('country2');

var acceptCheck = document.getElementById('acceptCheck');

var continueBtn = document.getElementById('continue');
var acceptBtn = document.getElementById('accept');

if(getCookie('ipoaccepted')) {
    modal.classList.add('hidden');
}

continueBtn.addEventListener('click', function(){
    var country1val = country1.value;
    var country2val = country2.value;

    if(country1val == '' || country2val == '') {
        popup1.classList.add('hidden');
        popup3.classList.remove('hidden');
    }
    else {
        popup1.classList.add('hidden');
        popup2.classList.remove('hidden');   
    }
});

acceptBtn.addEventListener('click', function(){
    if(acceptCheck.checked) {
        modal.classList.add('hidden');

        setCookie('ipoaccepted', 1, 1);
    }
    else {
       
    }
});

</script>