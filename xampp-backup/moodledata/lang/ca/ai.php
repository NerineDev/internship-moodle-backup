<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'ai', language 'ca', version '5.1'.
 *
 * @package     ai
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptai'] = 'Accepta i continua';
$string['action'] = 'Acció';
$string['action_explain_text'] = 'Explica el text';
$string['action_explain_text_desc'] = 'Explica el contingut del text d\'una pàgina del curs.';
$string['action_explain_text_help'] = 'Ofereix una explicació que amplia les idees clau, simplifica conceptes complexos i afegeix context per fer que el text sigui més fàcil d\'entendre.';
$string['action_explain_text_instruction'] = 'Rebreu una entrada de text de l\'usuari. La vostra tasca és explicar el text proporcionat. Seguiu aquestes pautes:

1. Elaborar: Amplieu les idees i conceptes clau, assegurant-vos que l\'explicació afegeixi profunditat significativa i eviti reiterar el text literalment.
2. Simplificar: Desglosseu termes o idees complexes en components més simples, fent-los fàcils d\'entendre per a un públic ampli, inclosos els estudiants.
3. Proporcionar context: Expliqueu per què passa alguna cosa, com funciona o quin és el seu propòsit. Incloeu exemples o analogies rellevants per millorar la comprensió quan sigui necessari.
4. Organitzar lògicament: Estructureu la vostra explicació perquè flueixi de manera natural, començant per les idees fonamentals abans de passar a detalls més precisos.

Instruccions importants:

1. Retorneu el resum només en text pla.
2. No inclogueu cap format de marques, salutacions o tòpics.
3. Centreu-vos en la claredat, la concisió i l\'accessibilitat.

Assegureu-vos que l\'explicació sigui fàcil de llegir i que transmeti eficaçment els punts principals del text original.';
$string['action_generate_image'] = 'Genera una imatge';
$string['action_generate_image_desc'] = 'Genera una imatge a partir d\'una instrucció de text.';
$string['action_generate_image_help'] = 'Crea una imatge basada en una instrucció.';
$string['action_generate_text'] = 'Genera un text';
$string['action_generate_text_desc'] = 'Genera un text a partir d\'una instrucció de text.';
$string['action_generate_text_help'] = 'Crea un text basat en una instrucció.';
$string['action_generate_text_instruction'] = 'Rebreu una entrada de text de l\'usuari. La vostra tasca és generar un text basat en la seva sol·licitud. Seguiu aquestes instruccions importants:

1. Retorneu el resum només en text pla.
2. No inclogueu cap format de marques, salutacions ni tòpics.';
$string['action_summarise_text'] = 'Resumeix un text';
$string['action_summarise_text_desc'] = 'Resumeix el contingut del text d\'una pàgina del curs.';
$string['action_summarise_text_help'] = 'Crea un breu resum del contingut d\'una pàgina.';
$string['action_summarise_text_instruction'] = 'Rebreu una entrada de text de l\'usuari. La vostra tasca és resumir el text proporcionat. Seguiu aquestes pautes:

1. Condensar: Escurçar els passatges llargs en punts clau.
2. Simplificar: Facilitar la comprensió de la informació complexa, especialment per als estudiants.

Instruccions importants:

1. Retornar el resum només en text pla.
2. No incloure cap format de marques, salutacions ni tòpics.
3. Centrar-se en la claredat, la concisió i l\'accessibilitat.

Assegureu-vos que el resum sigui fàcil de llegir i que transmeti eficaçment els punts principals del text original.';
$string['action_translate_text'] = 'Traduir un text';
$string['action_translate_text_desc'] = 'Traduir el text proporcionat d\'un idioma a un altre.';
$string['actionsettingprovider'] = 'Paràmetres de l\'acció {$a}';
$string['actionsettingprovider_desc'] = 'Aquests paràmetres controlen com el {$a->providername} realitza l\'acció {$a->actionname}.';
$string['actionsettings'] = 'Paràmetres de l\'acció';
$string['actionsettings_desc'] = 'Aquests paràmetres controlen les accions d\'IA per a aquesta instància de proveïdor.';
$string['ai'] = 'IA';
$string['aiactionregister'] = 'Registre d\'accions de la IA';
$string['aiactionshdr'] = 'Seleccioneu les funcions d\'IA per a aquesta activitat:';
$string['aiplacements'] = 'Emplaçaments IA';
$string['aipolicyacceptance'] = 'Acceptació de la política d\'IA';
$string['aipolicyregister'] = 'Registre de polítiques d\'IA';
$string['aiproviders'] = 'Proveïdors d\'IA';
$string['aireports'] = 'Informes d\'IA';
$string['aitools'] = 'Eines d\'IA';
$string['aitoolsincourseactivitydesc'] = 'Si s\'estableix a Sí, podeu especificar quines funcions d\'IA estaran disponibles.';
$string['aitoolsincoursedesc'] = 'Si s\'estableix a Sí, les eines d\'IA estaran disponibles per a les activitats d\'aquest curs. Les eines d\'IA es poden configurar a en els paràmetres de cada activitat.';
$string['aitoolsnotenabled'] = 'Per especificar quines funcions d\'IA estan disponibles en aquesta activitat, aneu als paràmetres del curs i activeu les eines d\'IA.';
$string['aiusage'] = 'Ús de la IA';
$string['aiusagepolicy'] = 'Política d\'ús de la IA';
$string['availableplacements'] = 'Trieu on estan disponibles les accions d\'IA';
$string['availableplacements_desc'] = 'Els emplaçaments defineixen com i on es poden utilitzar les accions d\'IA al vostre lloc web. Podeu triar quines accions estan disponibles a cada ubicació a través de la configuració.';
$string['availableproviders'] = 'Gestiona els proveïdors d\'IA connectats a l\'LMS';
$string['availableproviders_desc'] = 'Els proveïdors d\'IA afegeixen funcionalitats d\'IA al vostre lloc web mitjançant «accions» com ara el resum de text o la generació d\'imatges.<br/>
Podeu gestionar les accions de cada proveïdor a la seva configuració.';
$string['btninstancecreate'] = 'Crea una instància';
$string['btninstanceupdate'] = 'Actualitza la instància';
$string['completiontokens'] = 'Segments textuals de processament';
$string['completiontokens_help'] = 'Els segments textuals de processament són fragments de text que el model d\'IA genera en respondre la vostra consulta. Com més llarga sigui la resposta, més segments textuals s’utilitzen i, en conseqüència, més alt pot ser el cost.';
$string['configureprovider'] = 'Configura la instància del proveïdor';
$string['contentwatermark'] = 'Generat per IA';
$string['createnewprovider'] = 'Crea una nova instància de proveïdor';
$string['dateaccepted'] = 'Data acceptada';
$string['declineaipolicy'] = 'Rebutja';
$string['enableaitoolsincourse'] = 'Permet les eines d\'IA per a aquest curs';
$string['enableaitoolsincourseactivity'] = 'Permetre eines d\'IA en aquesta activitat';
$string['enableglobalratelimit'] = 'Estableix un límit de velocitat per a tot el lloc web';
$string['enableglobalratelimit_help'] = 'Limita el nombre de peticions que el proveïdor d\'IA pot rebre a tot el lloc web cada hora.';
$string['enableuserratelimit'] = 'Estableix el límit de velocitat pels usuaris';
$string['enableuserratelimit_help'] = 'Limita el nombre de peticions que cada usuari pot fer al proveïdor d\'IA cada hora.';
$string['error:400'] = 'Petició incorrecta';
$string['error:401'] = 'No autoritzat';
$string['error:401:upstreamless'] = 'No s\'ha pogut connectar al servei d\'IA. Torneu-ho a provar més tard.';
$string['error:404'] = 'No s\'ha trobat';
$string['error:404:upstreamless'] = 'El servei d\'IA no està disponible temporalment. Torneu-ho a provar més tard.';
$string['error:429'] = 'Massa peticions';
$string['error:429:internalsitewide'] = 'El servei d\'IA ha arribat al nombre màxim de peticions per hora a tot el lloc web. Torneu-ho a provar més tard.';
$string['error:429:internaluser'] = 'Heu arribat al nombre màxim de peticions d\'IA que podeu fer en una hora. Torneu-ho a provar més tard.';
$string['error:429:upstreamless'] = 'Aquest servei d\'IA ha arribat al seu límit de peticions. Torneu-ho a provar més tard.';
$string['error:500'] = 'Error intern del servidor';
$string['error:503'] = 'Servei no disponible';
$string['error:actionnotfound'] = 'L\'acció «{$a}» no és compatible.';
$string['error:defaultmessage'] = 'S\'ha produït un error en processar la petició. Torneu-ho a provar més tard.';
$string['error:defaultmessageshort'] = 'Torneu-ho a provar més tard.';
$string['error:defaultname'] = 'Alguna cosa ha anat malament';
$string['error:noproviders'] = 'No hi ha proveïdors disponibles per processar l\'acció.';
$string['error:providernotfound'] = 'No s\'ha trobat la instància del proveïdor d\'IA.';
$string['error:unknown'] = 'Error desconegut';
$string['globalratelimit'] = 'Nombre màxim de peticions a tot el lloc web';
$string['globalratelimit_help'] = 'El nombre de peticions a tot el lloc web permeses per hora.';
$string['manageaiplacements'] = 'Gestiona els emplaçaments de la IA';
$string['manageaiproviders'] = 'Gestiona els proveïdors d\'IA';
$string['noproviderplugins'] = 'No hi ha cap connector de proveïdor instal·lat. Instal·leu un connector de proveïdor per habilitar la creació d\'instàncies de proveïdor.';
$string['noproviders'] = 'Aquesta acció no està disponible. No hi ha cap <a href="{$a}">proveïdor d\'IA</a> configurat per a aquesta acció.';
$string['off'] = 'Desactivat';
$string['on'] = 'Activat';
$string['placement'] = 'Emplaçament';
$string['placementactionsettings'] = 'Accions';
$string['placementactionsettings_desc'] = 'Les accions d\'IA disponibles per a aquest emplaçament.';
$string['placementsettings'] = 'Paràmetres específics dels emplaçaments';
$string['placementsettings_desc'] = 'Aquests paràmetres controlen la manera com aquest emplaçament d\'IA es connecta al servei d\'IA i a les operacions relacionades';
$string['privacy:metadata:ai_action_explain_text'] = 'Una taula que emmagatzema les peticions d\'explicació de textos fetes pels usuaris.';
$string['privacy:metadata:ai_action_explain_text:completiontoken'] = 'Els segments textuals de processament utilitzats per generar l\'explicació del text.';
$string['privacy:metadata:ai_action_explain_text:fingerprint'] = 'L\'identificador únic (hash) que representa l\'estat o la versió del model i del contingut.';
$string['privacy:metadata:ai_action_explain_text:generatedcontent'] = 'El text generat pel model d\'IA a partir de la indicació d’entrada.';
$string['privacy:metadata:ai_action_explain_text:prompt'] = 'La indicació d’entrada per a la petició d\'explicació del text.';
$string['privacy:metadata:ai_action_explain_text:prompttokens'] = 'Els segments textuals d\'indicació d\'entrada utilitzats per explicar el text.';
$string['privacy:metadata:ai_action_explain_text:responseid'] = 'L\'ID de la resposta';
$string['privacy:metadata:ai_action_generate_image'] = 'Una taula que emmagatzema les peticions de generació d\'imatges fetes pels usuaris.';
$string['privacy:metadata:ai_action_generate_image:aspectratio'] = 'La relació d\'aspecte de les imatges generades.';
$string['privacy:metadata:ai_action_generate_image:numberimages'] = 'El nombre d\'imatges generades.';
$string['privacy:metadata:ai_action_generate_image:prompt'] = 'La indicació d\'entrada per a la petició de la generació d\'imatge.';
$string['privacy:metadata:ai_action_generate_image:quality'] = 'La qualitat de les imatges generades.';
$string['privacy:metadata:ai_action_generate_image:revisedprompt'] = 'La indicació d\'entrada revisada de les imatges generades.';
$string['privacy:metadata:ai_action_generate_image:sourceurl'] = 'L\'URL d\'origen de les imatges generades.';
$string['privacy:metadata:ai_action_generate_image:style'] = 'L\'estil de les imatges generades.';
$string['privacy:metadata:ai_action_generate_text'] = 'Una taula que emmagatzema les peticions de generació de text fetes pels usuaris.';
$string['privacy:metadata:ai_action_generate_text:completiontoken'] = 'Els segments textuals de processament utilitzats per generar el text.';
$string['privacy:metadata:ai_action_generate_text:fingerprint'] = 'L\'identificador únic (hash) que representa l\'estat o la versió del model i del contingut.';
$string['privacy:metadata:ai_action_generate_text:generatedcontent'] = 'El text generat pel model d\'IA basat en la indicació d\'entrada.';
$string['privacy:metadata:ai_action_generate_text:prompt'] = 'La indicació d\'entrada per a la petició de generació de text.';
$string['privacy:metadata:ai_action_generate_text:prompttokens'] = 'Els segments textuals de la indicació d\'entrada utilitzats per generar el text.';
$string['privacy:metadata:ai_action_generate_text:responseid'] = 'L\'ID de la resposta.';
$string['privacy:metadata:ai_action_register'] = 'Una taula que emmagatzema les peticions d\'accions fetes pels usuaris.';
$string['privacy:metadata:ai_action_register:actionid'] = 'L\'ID de la petició d\'acció.';
$string['privacy:metadata:ai_action_register:actionname'] = 'El nom de l\'acció de la petició.';
$string['privacy:metadata:ai_action_register:model'] = 'El model utilitzat per generar la resposta.';
$string['privacy:metadata:ai_action_register:provider'] = 'El nom del proveïdor que ha gestionat la petició.';
$string['privacy:metadata:ai_action_register:success'] = 'L\'estat de la petició d\'acció.';
$string['privacy:metadata:ai_action_register:timecompleted'] = 'L\'hora de finalització de la petició.';
$string['privacy:metadata:ai_action_register:timecreated'] = 'L\'hora de creació de la petició.';
$string['privacy:metadata:ai_action_register:userid'] = 'L\'ID de l\'usuari que ha fet la petició.';
$string['privacy:metadata:ai_action_summarise_text'] = 'Una taula que emmagatzema les peticions de resum de text fetes pels usuaris.';
$string['privacy:metadata:ai_action_summarise_text:completiontoken'] = 'Els segments textuals de processament utilitzats per resumir el text.';
$string['privacy:metadata:ai_action_summarise_text:fingerprint'] = 'L\'identificador únic (hash) que representa l\'estat o la versió del model i del contingut.';
$string['privacy:metadata:ai_action_summarise_text:generatedcontent'] = 'El text generat pel model d\'IA basat en la indicació d\'entrada.';
$string['privacy:metadata:ai_action_summarise_text:prompt'] = 'La indicació d\'entrada per a la petició de resum de text.';
$string['privacy:metadata:ai_action_summarise_text:prompttokens'] = 'Els segments textuals de la indicació d\'entrada utilitzats per resumir el text.';
$string['privacy:metadata:ai_action_summarise_text:responseid'] = 'L\'ID de la resposta';
$string['privacy:metadata:ai_policy_register'] = 'Una taula que emmagatzema l\'estat de l\'acceptació de la política d\'IA de cada usuari.';
$string['privacy:metadata:ai_policy_register:contextid'] = 'L\'ID del context les dades del qual s\'han desat.';
$string['privacy:metadata:ai_policy_register:timeaccepted'] = 'L\'hora en què l\'usuari va acceptar la política d\'IA.';
$string['privacy:metadata:ai_policy_register:userid'] = 'L\'ID de l\'usuari les dades del qual s\'han desat.';
$string['prompttokens'] = 'Segments textuals de la indicació d\'entrada';
$string['prompttokens_help'] = 'Els segments textuals de la indicació d\'entrada són unitats de text que formen l\'entrada que envieu al model d\'IA. Les entrades més llargues utilitzen més segments textuals, cosa que probablement costarà més.';
$string['provider'] = 'Proveïdor';
$string['provideractionsettings'] = 'Accions';
$string['provideractionsettings_desc'] = 'Trieu i configureu les accions que {$a} pot dur a terme al vostre lloc web.';
$string['providerinstanceactionupdated'] = 'S\'han actualitzat els paràmetres de l\'acció {$a}';
$string['providerinstancecreated'] = 'S\'ha creat una instància del proveïdor d\'IA {$a}.';
$string['providerinstancedelete'] = 'Esborra la instància del proveïdor d\'IA';
$string['providerinstancedeleteconfirm'] = 'Ara esborrareu la instància del proveïdor d\'IA {$a->name} ({$a->provider}). Confirmeu que voleu que es dugui a terme aquesta acció?';
$string['providerinstancedeleted'] = 'S\'ha esborrat la instància del proveïdor d\'IA {$a}.';
$string['providerinstancedeletefailed'] = 'No es pot esborrar la instància del proveïdor d\'IA {$a}. El proveïdor està en ús o hi ha un problema amb la base de dades. Comproveu que el proveïdor estigui actiu o poseu-vos en contacte amb l\'administrador de la base de dades per obtenir ajuda.';
$string['providerinstancedisablefailed'] = 'No es pot desactivar la instància del proveïdor d\'IA. El proveïdor està en ús o hi ha un problema amb la base de dades. Comproveu que el proveïdor estigui actiu o poseu-vos en contacte amb l\'administrador de la base de dades per obtenir ajuda.';
$string['providerinstanceupdated'] = 'S\'ha actualitzat la instància del proveïdor d\'IA {$a}.';
$string['providermoveddown'] = '{$a} s\'ha mogut cap avall.';
$string['providermovedup'] = '{$a} s\'ha mogut cap amunt.';
$string['providername'] = 'Nom de la instància';
$string['providers'] = 'Proveïdors';
$string['providersettings'] = 'Paràmetres';
$string['providertype'] = 'Trieu el connector del proveïdor d\'IA';
$string['timegenerated'] = 'Hora de la generació';
$string['unknownvalue'] = '—';
$string['userpolicy'] = '<h4><strong>Benvinguts a la nova funció d\'IA!</strong></h4>
<p>Aquesta funció d\'intel·ligència artificial (IA) es basa únicament en models de llenguatge grans (LLM) externs per millorar la vostra experiència d\'aprenentatge i ensenyament. Abans de començar a utilitzar aquests serveis d\'IA, llegiu aquesta política d\'ús.</p>
<h4><strong>Precisió del contingut generat per IA</strong></h4>
<p>La IA pot oferir suggeriments i informació útils, però la seva precisió pot variar. Sempre heu de comprovar la informació proporcionada per assegurar-vos que sigui precisa, completa i adequada per a la vostra situació específica.</p>
<h4><strong>Com es processen les vostres dades</strong></h4>
<p>Aquesta funció d\'IA utilitza models de llenguatge grans (LLM) externs. Si utilitzeu aquesta funció, qualsevol informació o dades personals que compartiu es gestionarà d\'acord amb la política de privadesa d\'aquests LLM. Us recomanem que llegiu la seva política de privadesa per entendre com gestionaran les vostres dades. A més, en aquest lloc web es pot desar un registre de les vostres interaccions amb les funcions d\'IA.</p>
<p>Si teniu preguntes sobre com es processen les vostres dades, consulteu amb els vostres professors o l\'organització que dur a terme l\'ensenyament.</p>
<p>Si continueu, reconeixeu que enteneu i accepteu aquesta política.</p>';
$string['userratelimit'] = 'Nombre màxim de peticions per usuari';
$string['userratelimit_help'] = 'El nombre màxim de peticions que pot fer un usuari cada hora.';
