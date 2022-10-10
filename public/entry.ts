import { App, InjectionKey } from 'vue'

// Import library
import WampClient from '@/lib/Client'
import WampLogger from '@/lib/Logger'
import { useWampV1Client } from '@/lib/useWampV1Client'
import { InstallFunction, IWampClient, PluginOptions } from '@/types/ws-exchange-plugin'

export const WampClientDefaultOptions = {
    autoReestablish: true,
    autoCloseTimeout: -1,
    debug: false,
}

export const key: InjectionKey<IWampClient> = Symbol('wampClient')

export function createWampV1Client(): InstallFunction {
  const plugin: InstallFunction = {
    install(app: App, options: PluginOptions) {
      if (this.installed) { return; }
      this.installed = true;

      const pluginOptions = {...WampClientDefaultOptions, ...options};

      const wampClient = new WampClient(pluginOptions.wsuri as string, new WampLogger(pluginOptions.debug));

      app.provide(key, wampClient)
    },
  };

  return plugin;
}

export { WampClient, useWampV1Client };

export * from '@/types/ws-exchange-plugin';
