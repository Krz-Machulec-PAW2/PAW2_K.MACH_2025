{if ($messages->isError())} 
                <h4>Wystąpiły błędy: </h4>
                <ol>
                {foreach  $messages->getErrors() as $msg}
                <li>{$msg}</li>
                {/foreach}
                </ol>
            {/if}
        

            {if ($messages->isInfo())}
	            <h4>Informacje: </h4>
	            <ol>
	            {foreach $messages->getInfos() as $inf}
	            {strip}
		            <li>{$inf}</li>
	            {/strip}
	            {/foreach}
	            </ol>
            {/if}